<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SmAcademicYear;
use App\Models\SmParent;
use App\Models\SmStudent;
use App\Models\StudentRecord;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentRegisterController extends Controller
{
    /**
     * POST /portal/api/student-register
     * Public endpoint — no auth required.
     * Frontend (gsischools.com) form se data aata hai.
     */
    public function store(Request $request)
    {
        // ── 1. VALIDATE ───────────────────────────────────────────────
        $validated = $request->validate([
            // Academic
            'session'          => 'required|integer',
            'class_id'         => 'required|integer',
            'section_id'       => 'required|integer',
            'admission_number' => 'required|string|max:50',
            'admission_date'   => 'nullable|date',
            'roll_number'      => 'nullable|string|max:20',
            'group'            => 'nullable|integer',
            'shift'            => 'nullable|integer',

            // Student
            'first_name'       => 'required|string|max:100',
            'last_name'        => 'required|string|max:100',
            'gender'           => 'required|integer',
            'date_of_birth'    => 'required|date',
            'email_address'    => 'nullable|email|max:150',
            'phone_number'     => 'required|string|max:20',
            'religion'         => 'nullable|integer',
            'photo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // Guardian
            'guardians_name'       => 'nullable|string|max:150',
            'relation'             => 'nullable|string|max:50',
            'guardians_email'      => 'nullable|email|max:150',
            'guardians_phone'      => 'required|string|max:20',
            'guardians_occupation' => 'nullable|string|max:150',
            'guardians_address'    => 'nullable|string|max:500',
        ]);

        // ── 2. SCHOOL ID (portal ka fixed school) ─────────────────────
        $school_id = 2; // apna school_id yahan daalo

        // ── 3. ACADEMIC YEAR ──────────────────────────────────────────
        // Frontend ne session ID bheja hai (1 = 2025, 2 = 2026 ...)
        // Portal ki SmAcademicYear table se match karo
        $academic_year = SmAcademicYear::where('school_id', $school_id)
            ->where('id', $request->session)       // frontend ki value = DB id
            ->first();

        // Fallback: active academic year lo
        if (!$academic_year) {
            $academic_year = SmAcademicYear::where('school_id', $school_id)
                ->where('active_status', 1)
                ->first();
        }

        if (!$academic_year) {
            return response()->json([
                'status'  => false,
                'message' => 'Academic year nahi mili. Admin se rabta karein.',
            ], 422);
        }

        DB::beginTransaction();

        try {

            $created_at_ts = $academic_year->year . '-01-01 12:00:00';
            $email         = $request->email_address ?: null;
            $phone         = $request->phone_number;
            $g_email       = $request->guardians_email ?: null;
            $g_phone       = $request->guardians_phone;

            // ── 4. STUDENT USER ───────────────────────────────────────
            $user_stu               = new User();
            $user_stu->role_id      = 2;
            $user_stu->full_name    = $request->first_name . ' ' . $request->last_name;
            $user_stu->username     = $phone ?: ($email ?: $request->admission_number);
            $user_stu->email        = $email;
            $user_stu->phone_number = $phone;
            $user_stu->password     = Hash::make('123456');
            $user_stu->school_id    = $school_id;
            $user_stu->created_at   = $created_at_ts;
            $user_stu->save();

            // ── 5. PARENT USER ────────────────────────────────────────
            $user_parent               = new User();
            $user_parent->role_id      = 3;
            $user_parent->full_name    = $request->guardians_name ?? 'Guardian';
            $user_parent->username     = $g_phone ?: ($g_email ?: $g_phone);
            $user_parent->email        = $g_email;
            $user_parent->phone_number = $g_phone;
            $user_parent->password     = Hash::make('123456');
            $user_parent->school_id    = $school_id;
            $user_parent->created_at   = $created_at_ts;
            $user_parent->save();

            // ── 6. PARENT RECORD ──────────────────────────────────────
            $parent                     = new SmParent();
            $parent->user_id            = $user_parent->id;
            $parent->guardians_name     = $request->guardians_name;
            $parent->guardians_mobile   = $g_phone;
            $parent->guardians_email    = $g_email;
            $parent->guardians_address  = $request->guardians_address;
            $parent->guardians_relation = $request->relation;
            $parent->school_id          = $school_id;
            $parent->academic_id        = $academic_year->id;
            $parent->created_at         = $created_at_ts;
            $parent->save();

            // ── 7. PHOTO UPLOAD ───────────────────────────────────────
            $student_photo = null;
            if ($request->hasFile('photo')) {
                $student_photo = fileUpload($request->file('photo'), 'public/uploads/student/');
            }

            // ── 8. STUDENT RECORD ─────────────────────────────────────
            $smStudent                  = new SmStudent();
            $smStudent->user_id         = $user_stu->id;
            $smStudent->parent_id       = $parent->id;
            $smStudent->role_id         = 2;
            $smStudent->admission_no    = $request->admission_number;
            $smStudent->roll_no         = $request->roll_number;
            $smStudent->first_name      = $request->first_name;
            $smStudent->last_name       = $request->last_name;
            $smStudent->full_name       = $request->first_name . ' ' . $request->last_name;
            $smStudent->gender_id       = $request->gender;
            $smStudent->date_of_birth   = date('Y-m-d', strtotime($request->date_of_birth));
            $smStudent->email           = $email;
            $smStudent->mobile          = $phone;
            $smStudent->admission_date  = $request->admission_date
                                            ? date('Y-m-d', strtotime($request->admission_date))
                                            : date('Y-m-d');
            $smStudent->student_photo   = $student_photo;
            $smStudent->religion_id     = $request->religion;
            $smStudent->school_id       = $school_id;
            $smStudent->academic_id     = $academic_year->id;
            $smStudent->created_at      = $created_at_ts;
            $smStudent->save();

            // ── 9. STUDENT CLASS RECORD ───────────────────────────────
            $studentRecord               = new StudentRecord();
            $studentRecord->student_id   = $smStudent->id;
            $studentRecord->class_id     = $request->class_id;
            $studentRecord->section_id   = $request->section_id;
            $studentRecord->academic_id  = $academic_year->id;
            $studentRecord->school_id    = $school_id;
            $studentRecord->is_default   = 1;
            $studentRecord->save();

            DB::commit();

            return response()->json([
                'status'  => true,
                'message' => 'Student successfully register ho gaya!',
                'student' => [
                    'id'        => $smStudent->id,
                    'full_name' => $smStudent->full_name,
                    'email'     => $smStudent->email,
                ],
            ]);

        } catch (\Exception $e) {
            DB::rollback();

            return response()->json([
                'status'  => false,
                'message' => 'Registration fail ho gayi: ' . $e->getMessage(),
            ], 500);
        }
    }
}
