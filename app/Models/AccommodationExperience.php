<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccommodationExperience extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $cast = [
        'is_active' => 'boolean'
    ];

    public function universityAficionadoProfiles()
    {
        return $this->belongsToMany(UniversityAficionadoProfile::class, 'aficionado_accommodation_experience')
                    ->withTimestamps();
    }
}
