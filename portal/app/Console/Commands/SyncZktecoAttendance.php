<?php

namespace App\Console\Commands;

use App\Models\ZktecoDevice;
use App\Models\ZktecoSetting;
use App\Services\Zkteco\ZktecoAttendanceSyncService;
use Illuminate\Console\Command;

class SyncZktecoAttendance extends Command
{
    protected $signature = 'zkteco:sync {--school= : Limit sync to a school ID}';

    protected $description = 'Pull attendance from ZKTeco devices and sync to student attendance';

    public function handle(ZktecoAttendanceSyncService $syncService): int
    {
        $schoolOption = $this->option('school');

        $settingsQuery = ZktecoSetting::query()->where('auto_sync_enabled', true);

        if ($schoolOption) {
            $settingsQuery->where('school_id', $schoolOption);
        }

        $enabledSchools = $settingsQuery->pluck('school_id');

        $devices = ZktecoDevice::active()
            ->when($schoolOption, fn ($q) => $q->where('school_id', $schoolOption))
            ->when($enabledSchools->isNotEmpty(), fn ($q) => $q->whereIn('school_id', $enabledSchools))
            ->whereIn('sync_mode', ['pull', 'both'])
            ->get();

        if ($devices->isEmpty()) {
            $this->info('No active ZKTeco devices configured for pull sync.');

            return self::SUCCESS;
        }

        foreach ($devices as $device) {
            $this->info("Syncing device: {$device->name} ({$device->ip_address})");
            $result = $syncService->pullFromDevice($device);
            $this->line($result['message'] ?? 'Done');
        }

        $schoolIds = $devices->pluck('school_id')->filter()->unique();

        foreach ($schoolIds as $schoolId) {
            $stats = $syncService->processUnprocessedLogs($schoolId);
            $this->line("School {$schoolId}: {$stats['success']} attendance records saved.");
        }

        return self::SUCCESS;
    }
}
