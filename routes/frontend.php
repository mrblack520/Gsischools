<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/schools', [FrontendController::class,'schools'])->name('schools');
Route::get('/Academy', [FrontendController::class,'Academy'])->name('Academy');

Route::get('/events', [FrontendController::class, 'profession'])->name('frontend.profession');

Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');

Route::get('/faqs', [FrontendController::class, 'faqs'])->name('frontend.faqs');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('frontend.privacy-policy');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('frontend.contact-us');

