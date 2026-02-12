<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeArea extends Model
{
    protected $fillable = [
        'title',
        'profession_id'
    ];

    protected $cast = [
        'is_active' => 'boolean'
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
}
