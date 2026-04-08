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

    $token = $request->token;

    if (!$token) {
        return redirect('/portal/login')->withErrors(['msg' => 'Token missing']);
    }

    // API se user data lana
    $response = Http::withHeaders([
        'Authorization' => $token
    ])->get(config('app.api_url').'/me');
    dd($response->json());

    if ($response->failed()) {
        return redirect('/portal/login')->withErrors(['msg' => 'Invalid Token']);
    }

    $userData = $response->json()['user'] ?? null;

    if (!$userData) {
        return redirect('/portal/login')->withErrors(['msg' => 'User not found']);
    }

    // Portal DB me user check
    $user = User::where('email', $userData['email'])->first();

    if (!$user) {
        return redirect('/portal/login')->withErrors(['msg' => 'Portal user not found']);
    }

    // User ko login karna
    Auth::login($user);

    // Redirect to Dashboard (FORCE REDIRECT)
    return redirect()->intended('/portal/admin-dashboard');
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
