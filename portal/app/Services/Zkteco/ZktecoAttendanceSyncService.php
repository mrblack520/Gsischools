<?php

namespace App\Services\Zkteco;

use App\Models\StudentRecord;
use App\Models\ZktecoDevice;
use App\Models\ZktecoPunchLog;
use App\Models\ZktecoSetting;
use App\SmAcademicYear;
use App\SmStudent;
use App\SmStudentAttendance;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ZktecoAttendanceSyncService
{
    public function storePunch(
        string $devicePin,
        Carbon $punchTime,
        ?ZktecoDevice $device = null,
        ?int $verifyType = null,
        ?int $status = null
    ): ZktecoPunchLog {
        return ZktecoPunchLog::firstOrCreate(
            [
                'zkteco_device_id' => $device?->id,
                'device_pin' => $devicePin,
                'punch_time' => $punchTime->format('Y-m-d H:i:s'),
            ],
            [
                'school_id' => $device?->school_id,
                'verify_type' => $verifyType,
                'status' => $status,
                'device_serial' => $device?->serial_number,
            ]
        );
    }

    public function processUnprocessedLogs(?int $schoolId = null): array
    {
        $stats = ['processed' => 0, 'success' => 0, 'failed' => 0, 'skipped' => 0];

        $query = ZktecoPunchLog::query()->where('is_processed', false);

        if ($schoolId) {
            $query->where('school_id', $schoolId);
        }

        $query->orderBy('punch_time')->chunkById(100, function (Collection $logs) use (&$stats, $schoolId): void {
            foreach ($logs as $log) {
                $stats['processed']++;
                $result = $this->processPunchLog($log, $schoolId ?? $log->school_id);

                if ($result['success']) {
                    $stats['success']++;
                } elseif ($result['skipped'] ?? false) {
                    $stats['skipped']++;
                } else {
                    $stats['failed']++;
                }
            }
        });

        return $stats;
    }

    public function processPunchLog(ZktecoPunchLog $log, ?int $schoolId = null): array
    {
        $settings = ZktecoSetting::forSchool($schoolId ?? $log->school_id);
        $student = $this->resolveStudent($log->device_pin, $settings, $schoolId ?? $log->school_id);

        if (! $student) {
            $log->update([
                'is_processed' => true,
                'sync_success' => false,
                'sync_message' => 'No student found for device PIN: '.$log->device_pin,
            ]);

            return ['success' => false, 'message' => $log->sync_message];
        }

        $studentRecord = StudentRecord::withoutGlobalScopes()
            ->where('student_id', $student->id)
            ->where('school_id', $student->school_id)
            ->where('is_promote', 0)
            ->when($student->academic_id, fn ($q) => $q->where('academic_id', $student->academic_id))
            ->orderByDesc('is_default')
            ->first();

        if (! $studentRecord) {
            $academicId = SmAcademicYear::SINGLE_SCHOOL_API_ACADEMIC_YEAR() ?: getAcademicId();
            $studentRecord = StudentRecord::withoutGlobalScopes()
                ->where('student_id', $student->id)
                ->where('school_id', $student->school_id)
                ->where('is_promote', 0)
                ->where('academic_id', $academicId)
                ->orderByDesc('is_default')
                ->first();
        }

        if (! $studentRecord) {
            $log->update([
                'is_processed' => true,
                'sync_success' => false,
                'sync_message' => 'No active student record for student ID '.$student->id,
            ]);

            return ['success' => false, 'message' => $log->sync_message];
        }

        $attendanceDate = $log->punch_time->format('Y-m-d');
        $attendanceType = $this->resolveAttendanceType($log->punch_time, $settings);

        $existing = SmStudentAttendance::withoutGlobalScopes()
            ->where('student_id', $student->id)
            ->where('student_record_id', $studentRecord->id)
            ->where('attendance_date', $attendanceDate)
            ->where('school_id', $student->school_id)
            ->first();

        if ($existing && in_array($existing->attendance_type, ['P', 'L'], true) && $attendanceType === 'L') {
            $log->update([
                'is_processed' => true,
                'sync_success' => true,
                'sync_message' => 'Already marked present; punch ignored.',
                'student_attendance_id' => $existing->id,
            ]);

            return ['success' => true, 'skipped' => true, 'message' => $log->sync_message];
        }

        $attendance = $existing ?: new SmStudentAttendance();
        $attendance->student_id = $student->id;
        $attendance->student_record_id = $studentRecord->id;
        $attendance->class_id = $studentRecord->class_id;
        $attendance->section_id = $studentRecord->section_id;
        $attendance->attendance_date = $attendanceDate;
        $attendance->attendance_type = $attendanceType;
        $attendance->notes = 'ZKTeco biometric ('.$log->punch_time->format('H:i:s').')';
        $attendance->school_id = $student->school_id;
        $attendance->academic_id = $studentRecord->academic_id ?: getAcademicId();

        if (function_exists('shiftEnable') && shiftEnable() && ! empty($studentRecord->shift_id)) {
            $attendance->shift_id = $studentRecord->shift_id;
        }

        $attendance->save();

        $log->update([
            'is_processed' => true,
            'sync_success' => true,
            'sync_message' => 'Attendance saved as '.$attendanceType,
            'student_attendance_id' => $attendance->id,
            'school_id' => $student->school_id,
        ]);

        return ['success' => true, 'attendance_id' => $attendance->id];
    }

    protected function resolveStudent(string $devicePin, ZktecoSetting $settings, ?int $schoolId): ?SmStudent
    {
        $query = SmStudent::withoutGlobalScopes()->where('active_status', 1);

        if ($schoolId) {
            $query->where('school_id', $schoolId);
        }

        return match ($settings->mapping_field) {
            'user_id' => $query->where('user_id', $devicePin)->first(),
            'roll_no' => $query->where('roll_no', $devicePin)->first(),
            default => $query->where('admission_no', $devicePin)->first(),
        };
    }

    protected function resolveAttendanceType(Carbon $punchTime, ZktecoSetting $settings): string
    {
        $time = $punchTime->format('H:i:s');
        $start = Carbon::parse($settings->start_time)->format('H:i:s');
        $late = Carbon::parse($settings->late_time)->format('H:i:s');
        $absent = Carbon::parse($settings->absent_time)->format('H:i:s');

        if ($time <= $start) {
            return 'P';
        }

        if ($time <= $late) {
            return 'L';
        }

        if ($time <= $absent) {
            return 'L';
        }

        return 'A';
    }

    public function pullFromDevice(ZktecoDevice $device): array
    {
        if (empty($device->ip_address)) {
            return ['success' => false, 'message' => 'Device IP address is not configured.'];
        }

        if (! in_array($device->sync_mode, ['pull', 'both'], true)) {
            return ['success' => false, 'message' => 'Device is not configured for pull sync.'];
        }

        try {
            $client = new ZktecoDeviceClient($device->ip_address, $device->port ?: config('zkteco.default_port', 4370));
            $records = $client->getAttendances();
        } catch (\Throwable $e) {
            Log::error('ZKTeco pull failed', ['device' => $device->id, 'error' => $e->getMessage()]);
            $device->update([
                'last_sync_at' => now(),
                'last_sync_message' => $e->getMessage(),
            ]);

            return ['success' => false, 'message' => $e->getMessage()];
        }

        $imported = 0;

        foreach ($records as $record) {
            $pin = (string) ($record['uid'] ?? $record['id'] ?? '');
            $time = Carbon::parse($record['timestamp'] ?? $record['record_time'] ?? now());

            if ($pin === '') {
                continue;
            }

            $this->storePunch($pin, $time, $device, $record['type'] ?? null, $record['state'] ?? null);
            $imported++;
        }

        $stats = $this->processUnprocessedLogs($device->school_id);

        $message = "Imported {$imported} punch(es). Processed: {$stats['success']} success, {$stats['failed']} failed.";

        $device->update([
            'last_sync_at' => now(),
            'last_sync_message' => $message,
        ]);

        return ['success' => true, 'message' => $message, 'imported' => $imported, 'stats' => $stats];
    }
}
