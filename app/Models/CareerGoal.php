<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerGoal extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_career_goal');
    }
}
