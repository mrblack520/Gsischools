<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\SmParent;
use App\SmStudent;
use App\Models\StudentRecord;
use App\SmAcademicYear;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class StudentRegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'first_name'               => 'required|string',
            'last_name'                => 'required|string',
            'date_of_birth'            => 'required|date',
            'gender'                   => 'required',
            'contact_number'           => 'required',
            'email'                    => 'required|email',
            'address'                  => 'required|string',
            'religion'                 => 'required|string',
            'national_id_no'           => 'required|string',
            'guardian_name'            => 'required|string',
            'guardian_email'           => 'required|email',
            'guardian_phone'           => 'required|string',
            'admission_date'           => 'required|date',
        ]);

        DB::beginTransaction();

        try {

            // School ID — portal ka default school
            $school_id = 1; // apna school_id daalo

            // Academic Year
            $academic_year = SmAcademicYear::where('school_id', $school_id)
                ->where('active_status', 1)
                ->first();

            if (!$academic_year) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Academic year not found'
                ], 404);
            }

            // Student User banao
            $user_stu             = new User();
            $user_stu->role_id    = 2;
            $user_stu->full_name  = $request->first_name . ' ' . $request->last_name;
            $user_stu->username   = $request->contact_number ?: $request->email;
            $user_stu->email      = $request->email;
            $user_stu->phone_number = $request->contact_number;
            $user_stu->password   = Hash::make(123456);
            $user_stu->school_id  = $school_id;
            $user_stu->created_at = $academic_year->year . '-01-01 12:00:00';
            $user_stu->save();

            // Parent User banao
            $user_parent              = new User();
            $user_parent->role_id     = 3;
            $user_parent->full_name   = $request->guardian_name;
            $user_parent->username    = $request->guardian_phone ?: $request->guardian_email;
            $user_parent->email       = $request->guardian_email;
            $user_parent->phone_number = $request->guardian_phone;
            $user_parent->password    = Hash::make(123456);
            $user_parent->school_id   = $school_id;
            $user_parent->created_at  = $academic_year->year . '-01-01 12:00:00';
            $user_parent->save();

            // Parent record banao
            $parent                    = new SmParent();
            $parent->user_id           = $user_parent->id;
            $parent->fathers_name      = $request->joinned_as == 1 ? $request->guardian_name : null;
            $parent->mothers_name      = $request->joinned_as == 2 ? $request->guardian_name : null;
            $parent->guardians_name    = $request->guardian_name;
            $parent->guardians_mobile  = $request->guardian_phone;
            $parent->guardians_email   = $request->guardian_email;
            $parent->guardians_address = $request->guardian_address;
            $parent->guardians_relation = $request->joinned_as;
            $parent->school_id         = $school_id;
            $parent->academic_id       = $academic_year->id;
            $parent->created_at        = $academic_year->year . '-01-01 12:00:00';
            $parent->save();

            // Image upload
            $student_photo = null;
            if ($request->hasFile('photo')) {
                $student_photo = fileUpload($request->file('photo'), 'public/uploads/student/');
            }

            // Student record banao
            $smStudent                         = new SmStudent();
            $smStudent->user_id                = $user_stu->id;
            $smStudent->parent_id              = $parent->id;
            $smStudent->role_id                = 2;
            $smStudent->first_name             = $request->first_name;
            $smStudent->last_name              = $request->last_name;
            $smStudent->full_name              = $request->first_name . ' ' . $request->last_name;
            $smStudent->gender_id              = $request->gender;
            $smStudent->date_of_birth          = date('Y-m-d', strtotime($request->date_of_birth));
            $smStudent->email                  = $request->email;
            $smStudent->mobile                 = $request->contact_number;
            $smStudent->admission_date         = date('Y-m-d', strtotime($request->admission_date));
            $smStudent->student_photo          = $student_photo;
            $smStudent->religion_id            = $request->religion;
            $smStudent->current_address        = $request->address;
            $smStudent->national_id_no         = $request->national_id_no;
            $smStudent->previous_school_details = $request->previous_school;
            $smStudent->school_id              = $school_id;
            $smStudent->academic_id            = $academic_year->id;
            $smStudent->created_at             = $academic_year->year . '-01-01 12:00:00';
            $smStudent->save();

            // Student Record insert
            $studentRecord                = new StudentRecord();
            $studentRecord->student_id    = $smStudent->id;
            $studentRecord->class_id      = $request->class_id ?? 1;
            $studentRecord->section_id    = $request->section_id ?? 1;
            $studentRecord->academic_id   = $academic_year->id;
            $studentRecord->school_id     = $school_id;
            $studentRecord->is_default    = 1;
            $studentRecord->save();

            DB::commit();

            return response()->json([
                'status'  => true,
                'message' => 'Student registered successfully!',
                'student' => [
                    'id'         => $smStudent->id,
                    'full_name'  => $smStudent->full_name,
                    'email'      => $smStudent->email,
                ]
            ]);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status'  => false,
                'message' => 'Registration failed: ' . $e->getMessage()
            ], 500);
        }
    }
}