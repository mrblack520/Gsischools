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


Route::middleware(['web'])->get('/token-login', function(Request $request) {

    $token = $request->token;

    // ❗ Token check
    if (!$token) {
        return redirect('/portal/login')->withErrors(['msg' => 'Token missing']);
    }

    try {
        // ✅ API call with proper header
        $response = Http::timeout(5)
            ->withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . $token
            ])
            ->get(config('app.api_url') . '/me');

        // ❗ Response check
        if (!$response->successful()) {
            return redirect('/portal/login')->withErrors(['msg' => 'API not responding']);
        }

        // ✅ Get user data
        $userData = $response->json()['user'] ?? null;

        if (!$userData) {
            return redirect('/portal/login')->withErrors(['msg' => 'User not found from API']);
        }

        // ✅ Find user in DB
        $user = User::where('email', $userData['email'])->first();

        if (!$user) {
            return redirect('/portal/login')->withErrors(['msg' => 'User not found in portal DB']);
        }

        // ✅ Login user
        Auth::login($user, true);

        // ✅ Regenerate session
        $request->session()->regenerate();

        // ✅ FINAL redirect
        return redirect('/portal/admin-dashboard');

    } catch (\Exception $e) {
        return redirect('/portal/login')->withErrors(['msg' => $e->getMessage()]);
    }

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
