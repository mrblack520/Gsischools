<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ZktecoPunchLog extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'punch_time' => 'datetime',
        'is_processed' => 'boolean',
        'sync_success' => 'boolean',
    ];

    public function device(): BelongsTo
    {
        return $this->belongsTo(ZktecoDevice::class, 'zkteco_device_id');
    }
}
