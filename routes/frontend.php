<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/next-gen', [FrontendController::class, 'nextGen'])->name('frontend.next-gen');
Route::get('/aficionado', [FrontendController::class, 'aficionado'])->name('frontend.aficionado');
Route::get('/university', [FrontendController::class, 'university'])->name('frontend.university');
Route::get('/profession', [FrontendController::class, 'profession'])->name('frontend.profession');
Route::get('/profile', [FrontendController::class, 'profile'])->name('frontend.profile');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');

Route::get('/curiosity-hub', [FrontendController::class, 'curiosityHub'])->name('frontend.curiosity-hub');
Route::get('/example-question', [FrontendController::class, 'exampleQuestion'])->name('frontend.example-question');
Route::get('/faqs', [FrontendController::class, 'faqs'])->name('frontend.faqs');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('frontend.privacy-policy');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('frontend.contact-us');

Route::get('/questionnaire', [FrontendController::class, 'questionnaire'])->name('frontend.questionnaire');

Route::get('/request-form', [FrontendController::class, 'requestForm'])->name('frontend.request-form');


Route::get('/article-detail', [FrontendController::class, 'articleDetail'])->name('frontend.article-detail');
Route::get('/optional-profession-form', [FrontendController::class, 'optionalProfessionForm'])->name('frontend.optional-profession-form');
Route::get('/optional-university-form', [FrontendController::class, 'optionalUniversityForm'])->name('frontend.optional-university-form');
Route::get('/optional-university-profession-form', [FrontendController::class, 'optionalUniversityProfessionForm'])->name('frontend.optional-university-profession-form');
Route::get('/profession-form', [FrontendController::class, 'professionForm'])->name('frontend.profession-form');
Route::get('/read-more', [FrontendController::class, 'readMore'])->name('frontend.read-more');
Route::get('/university-form', [FrontendController::class, 'universityForm'])->name('frontend.university-form');
Route::get('/university-profession-form', [FrontendController::class, 'universityProfessionForm'])->name('frontend.university-profession-form');
