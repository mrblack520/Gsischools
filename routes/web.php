<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Token;

// Step 1: Portal se CSRF token lo

require __DIR__.'/frontend.php';
// require __DIR__.'/posting.php';
require __DIR__.'/auth.php';
// require __DIR__.'/user-action.php';