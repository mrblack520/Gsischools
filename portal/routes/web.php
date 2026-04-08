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


use Laravel\Passport\Token;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

Route::get('/token-login', function(Request $request) {

    $token = $request->token; // API se mile token
    dd($token);
    if (!$token) {
        return redirect('/portal/login')->withErrors(['msg' => 'Token missing']);
    }

    // 1️⃣ API call karo to verify token & get user email/password
    $response = Http::withHeaders([
        'Authorization' => $token
    ])->get(config('app.api_url').'/me'); // ya tumhara endpoint jahan user data milta
    if ($response->failed()) {
        return redirect('/portal/login')->withErrors(['msg' => 'Invalid token']);
    }

    $userData = $response->json()['user'] ?? null;

    if (!$userData) {
        return redirect('/portal/login')->withErrors(['msg' => 'User not found']);
    }

    // 2️⃣ Find user in portal DB by email
    $user = User::where('email', $userData['email'])->first();

      // 3️⃣ Login user
    Auth::login($user);

    // 4️⃣ Redirect to portal dashboard
    return redirect('/portal/admin-dashboard');

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
