<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'institution_name',
        'job_title',
        'start_date',
        'end_date'
    ];

    protected $cast = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];
}
