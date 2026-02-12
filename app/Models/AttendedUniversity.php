<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendedUniversity extends Model
{


    protected $fillable = [
        'university_id',
        'course_id',
        'status',
        'other_status'
    ];

    protected $cast = [
        'status' => 'integer'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
