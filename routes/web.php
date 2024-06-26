<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\candidatesController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\recruiterController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingPageController::class, 'index'])->name('landingPage');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/password/reset', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.update');



Route::prefix('dashboard')->group(function () {

    // Kandidat routes
    Route::prefix('kandidat')->group(function () {
        Route::get('/', [CandidatesController::class, 'index'])->name('dashboard.kandidat');
        Route::get('/profileKandidat', [CandidatesController::class, 'profileKandidat'])->name('dashboard.kandidat.profileKandidat');
        Route::get('/lowongan', [CandidatesController::class, 'lowongan'])->name('dashboard.kandidat.lowongan');
        Route::get('/status', [CandidatesController::class, 'status'])->name('dashboard.kandidat.status');
        Route::get('/statusDetail', [CandidatesController::class, 'statusDetail'])->name('dashboard.kandidat.statusDetail');
    });

    // Recruiter routes
    Route::prefix('recruiter')->group(function () {
        Route::get('/', [RecruiterController::class, 'index'])->name('dashboard.recruiter');
    });

});



Route::get('/cariLowongan', function () {
    return view('jobList');
});












Route::get('/postroom', [recruiterController::class, 'postroom'])->name('postroom');
Route::get('/postroom1', [recruiterController::class, 'detailPostroom'])->name('detailPostroom');
Route::get('/kandidat', [recruiterController::class, 'kandidat'])->name('kandidat');
Route::get('/profile', [candidatesController::class, 'profile'])->name('profile');
Route::get('/companyProfile', [recruiterController::class, 'companyProfile'])->name('companyProfile');
Route::get('/companyProfileSettings', [recruiterController::class, 'companyProfileSettings'])->name('companyProfileSettings');
