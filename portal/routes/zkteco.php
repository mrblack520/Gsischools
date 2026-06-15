<?php

use App\Http\Controllers\Api\ZktecoWebhookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ZKTeco ADMS Push Routes (public — called by attendance devices)
|--------------------------------------------------------------------------
| Configure device cloud server to: https://your-domain.com/iclock/cdata
*/

$prefix = config('zkteco.adms_prefix', 'iclock');

Route::prefix($prefix)->group(function () {
    Route::match(['get', 'post'], 'cdata', [ZktecoWebhookController::class, 'receiveData']);
    Route::get('getrequest', [ZktecoWebhookController::class, 'getRequest']);
    Route::post('devicecmd', [ZktecoWebhookController::class, 'deviceCmd']);
});
