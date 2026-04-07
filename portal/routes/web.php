<?php

use App\InfixModuleManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

if (config('app.app_sync')) {
    Route::get('/', 'LandingController@index')->name('/');
}
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Token;

Route::get('/portal/token-login', function (Request $request) {

    $token = $request->token;
    $token = str_replace('Bearer ', '', $token);

    // id nikal kar dekho
    $tokenId = explode('|', $token)[0] ?? null;

    // database se token fetch karo
    $accessToken = Token::find($tokenId);

    if ($accessToken) {
        $user = $accessToken->user;

        dd($user); // check karo user aa raha hai ya nahi

        if ($user) {
            Auth::login($user);
            return redirect('/portal/admin-dashboard');
        }
    }

    return redirect('/portal/login');
});

if (moduleStatusCheck('Saas')) {
    Route::group(['middleware' => ['subdomain'], 'domain' => '{subdomain}.' . config('app.short_url')], function ($routes) {
        require 'tenant.php';
    });

    Route::group(['middleware' => ['subdomain'], 'domain' => '{subdomain}'], function ($routes) {
        require 'tenant.php';
    });
}

Route::group(['middleware' => ['subdomain']], function ($routes) {
    require 'tenant.php';
});

Route::get('migrate', function () {
    if (Auth::check() && Auth::id() == 1) {
        Artisan::call('migrate', ['--force' => true]);
        Brian2694\Toastr\Facades\Toastr::success('Migration run successfully');

        return redirect()->to(url('/admin-dashboard'));
    }
    abort(404);
});

Route::post('editor/upload-file', 'UploadFileController@upload_image');
// Route::get('hide-routes',[HomeController::class,'hideRoute']);
