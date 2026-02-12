<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityAficionadoProfile extends Model
{
    protected $fillable = [
        'user_id',
        'rate',
        'course_details'
    ];

    public function universities()
    {
        return $this->belongsToMany(University::class, 'attended_universities')
                    ->withPivot('course_id', 'status', 'other_status')
                    ->withTimestamps();
    }

    public function accommodationExperiences()
    {
        return $this->belongsToMany(AccommodationExperience::class, 'aficionado_accommodation_experience')
                    ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
