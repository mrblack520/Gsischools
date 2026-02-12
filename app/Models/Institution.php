<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $cast = [
        'is_active' => 'boolean'
    ];

    public function professions()
    {
        return $this->belongsToMany(Profession::class, 'profession_institution');
    }
}
