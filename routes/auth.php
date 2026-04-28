<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\PersonalAccessToken;

Route::middleware('guest')->group(function () {

    Route::get('/login', [FrontendController::class, 'login'])->name('login');
   

    Route::get('/register', [FrontendController::class, 'register'])->name('frontend.register');
 
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');


    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

  });

