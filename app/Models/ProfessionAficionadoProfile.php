<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessionAficionadoProfile extends Model
{
    protected $fillable = [
        'user_id',
        'profession_id',
        'other_profession',
        'practice_area_id',
        'job_title_id',
        'institution_id',
        'current_institution',
        'years_of_experience',
        'university_id',
        'course_id',
        'status',
        'rate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profession()
    {
        return $this->hasOne(Profession::class);
    }

    public function qualifiedCountries()
    {
        return $this->belongsToMany(Country::class, 'aficionado_qualified_countries', 'profession_aficionado_profile_id', 'country_id');
    }

    public function experiencedCountries()
    {
        return $this->belongsToMany(Country::class, 'aficionado_experienced_countries', 'profession_aficionado_profile_id', 'country_id');
    }
}
