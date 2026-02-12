<?php

use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthController::class, 'login'])->name('account.login');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
