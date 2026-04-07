<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Token;

Route::get('/token-login', function (Request $request) {

    $token = $request->token;

    // remove Bearer
    $token = str_replace('Bearer ', '', $token);

    // Passport token check
    $accessToken = \Laravel\Passport\Token::where('id', explode('|', $token)[0] ?? null)->first();

    if ($accessToken) {
        $user = $accessToken->user;

        Auth::login($user);

        return redirect('/portal/admin-dashboard');
    }

    return redirect('/portal/login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/frontend.php';
require __DIR__.'/posting.php';
require __DIR__.'/auth.php';
require __DIR__.'/user-action.php';