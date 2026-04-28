<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\UserRole;
use App\Notifications\ResetPasswordLinkEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $appends = ['gender_label'];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'role',
        'gender',
        'date_of_birth',
        'phone_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class,
            'gender' => 'integer',
            'date_of_birth' => 'date',
        ];
    }

    public function sendPasswordResetNotification($token)
    {
        $name = "{$this->first_name} {$this->last_name}";
        $this->notify(new ResetPasswordLinkEmail($token, $this->email, $name));
    }

    public function getGenderLabelAttribute()
    {
        return match ($this->gender) {
            0 => 'Male',
            1 => 'Female',
            2 => 'Other',
            default => 'Not specified',
        };
    }

    public function userMeta(): HasOne
    {
        return $this->hasOne(UserMeta::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === UserRole::Admin;
    }

    public function careerStages()
    {
        return $this->belongsToMany(CareerStage::class, 'user_career_stage');
    }

    public function careerGoals()
    {
        return $this->belongsToMany(CareerGoal::class, 'user_career_goal');
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'user_language');
    }

 

    public function profession_aficionado_profile()
    {
        return $this->hasOne(ProfessionAficionadoProfile::class);
    }
}
