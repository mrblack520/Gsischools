<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'code',
        'name'
    ];

    protected $cast = [
        'is_active' => 'boolean'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_language');
    }
}
