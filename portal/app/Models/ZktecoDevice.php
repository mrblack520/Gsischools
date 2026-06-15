<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class ZktecoDevice extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'active' => 'boolean',
        'last_sync_at' => 'datetime',
        'port' => 'integer',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (self $device): void {
            if (empty($device->api_token)) {
                $device->api_token = Str::random(40);
            }
        });
    }

    public function punchLogs(): HasMany
    {
        return $this->hasMany(ZktecoPunchLog::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeForSchool($query, ?int $schoolId)
    {
        if ($schoolId) {
            return $query->where('school_id', $schoolId);
        }

        return $query;
    }
}
