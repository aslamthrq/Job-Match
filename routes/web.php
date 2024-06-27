<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\candidatesController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\recruiterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landingPage');
    Route::get('/lowongan', [LandingPageController::class, 'cariLowongan'])->name('cariLowongan');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('save.selected.tab');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->middleware('save.selected.tab');

    Route::get('/identityForm/{username}', [AuthController::class, 'showIdentityForm'])->name('identityForm');
    Route::post('/identityForm/{username}', [AuthController::class, 'lengkapiProfil']);



});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');



Route::prefix('dashboard')->group(function () {

    // Kandidat routes
    Route::prefix('kandidat')->middleware('role:participant')->group(function () {
        Route::get('/', [CandidatesController::class, 'index'])->name('dashboard.kandidat');
        Route::get('/profile', [CandidatesController::class, 'showProfile'])->name('dashboard.kandidat.showProfile');
        Route::get('/lowongan', [CandidatesController::class, 'lowongan'])->name('dashboard.kandidat.lowongan');
        Route::get('/status', [CandidatesController::class, 'status'])->name('dashboard.kandidat.status');
        Route::get('/statusDetail', [CandidatesController::class, 'statusDetail'])->name('dashboard.kandidat.statusDetail');
    });

    // Recruiter routes
    Route::prefix('recruiter')->middleware('role:recruiter')->group(function () {
        Route::get('/', [RecruiterController::class, 'index'])->name('dashboard.recruiter');
        Route::get('/profile', [RecruiterController::class, 'showProfile'])->name('dashboard.recruiter.showProfile');
        Route::get('/companyProfile', [RecruiterController::class, 'companyProfile'])->name('dashboard.recruiter.companyProfile');
        Route::get('/companySettings', [recruiterController::class, 'companySettings'])->name('dashboard.recruiter.companySettings');
        Route::get('/selectionRoom', [recruiterController::class, 'selectionRoom'])->name('dashboard.recruiter.selectionRoom');
        Route::get('/selectionRoom/001', [recruiterController::class, 'selectionRoomDetail'])->name('dashboard.recruiter.selectionRoom/001');
        Route::get('/candidate', [recruiterController::class, 'candidate'])->name('dashboard.recruiter.candidate');

        // Join or Create Company routes
        Route::post('/join-company', [recruiterController::class, 'joinCompany'])->name('dashboard.recruiter.joinCompany');
        Route::post('/create-company', [recruiterController::class, 'createCompany'])->name('dashboard.recruiter.createCompany');

        // View forms for joining or creating company
        Route::get('/join-company-form', [recruiterController::class, 'showJoinCompanyForm'])->name('dashboard.recruiter.showJoinCompanyForm');
        Route::get('/create-company-form', [recruiterController::class, 'showCreateCompanyForm'])->name('dashboard.recruiter.showCreateCompanyForm');
    });


    // Recruiter routes
    // Route::prefix('admin')->group(function () {
    //     Route::get('/', [adminController::class, 'index'])->name('dashboard.admin');
    // });
});



Route::get('/password/reset', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.update');
