<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $cast = [
        'is_active' => 'boolean'
    ];

    public function profiles()
    {
        return $this->belongsToMany(UniversityAficionadoProfile::class, 'attended_universities')
                    ->withPivot('course_id', 'status', 'other_status')
                    ->withTimestamps();
    }

}
