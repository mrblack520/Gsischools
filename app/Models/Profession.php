<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $cast = [
        'is_active' => 'boolean'
    ];


    public function interestedUsers() {
        return $this->belongsToMany(UserMeta::class, 'interested_field_user');
    }

    public function practiceAreas()
    {
        return $this->hasMany(PracticeArea::class);
    }

    public function institutions()
    {
        return $this->belongsToMany(Institution::class, 'profession_institution');
    }

    public function job_titles()
    {
        return $this->belongsToMany(JobTitle::class, 'profession_job_title');
    }

    public function professionals()
    {
        return $this->belongsToMany(ProfessionAficionadoProfile::class);
    }


}
