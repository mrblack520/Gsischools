<?php

use App\Models\AppSetting;

function appinfo()
{
    return (object) AppSetting::pluck('value', 'key')->toArray();
}
