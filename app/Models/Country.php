<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'iso3',
        'numeric_code',
        'currency_code',
        'currency_name',
        'currency_symbol',
        'capital',
        'region',
        'subregion',
        'latitude',
        'longitude',
        'flag_url'
    ];

    protected $cast = [
        'is_active' => 'boolean'
    ];

    public function qualifiedAficionados()
    {
        return $this->belongsToMany(ProfessionAficionadoProfile::class, 'aficionado_qualified_countries', 'country_id', 'profession_aficionado_profile_id');
    }

    public function experiencedAficionados()
    {
        return $this->belongsToMany(ProfessionAficionadoProfile::class, 'aficionado_experienced_countries', 'country_id', 'profession_aficionado_profile_id');
    }

}
