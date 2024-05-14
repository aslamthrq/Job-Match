<?php

use App\Http\Controllers\recruiterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/dashboard', [recruiterController::class, 'index'])->name('dashboard');
Route::get('/postroom', [recruiterController::class, 'postroom'])->name('postroom');
Route::get('/postroom1', [recruiterController::class, 'detailPostroom'])->name('detailPostroom');
Route::get('/profile', [recruiterController::class, 'profile'])->name('profile');
