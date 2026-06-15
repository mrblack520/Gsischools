<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZktecoSetting extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'auto_sync_enabled' => 'boolean',
        'sync_interval_minutes' => 'integer',
    ];

    public static function forSchool(?int $schoolId): self
    {
        $setting = static::firstOrCreate(
            ['school_id' => $schoolId],
            [
                'start_time' => '08:00:00',
                'late_time' => '08:30:00',
                'absent_time' => '09:30:00',
                'mapping_field' => 'admission_no',
                'auto_sync_enabled' => true,
                'sync_interval_minutes' => 5,
            ]
        );

        return $setting;
    }
}
