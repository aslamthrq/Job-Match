<?php

use App\Http\Controllers\candidatesController;
use App\Http\Controllers\recruiterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/listPerusahaan', [candidatesController::class, 'listPerusahaan'])->name('listPerusahaan');



Route::get('/dashboardKandidat', [candidatesController::class, 'index'])->name('dashboardKandidat');
Route::get('/profileKandidat', [candidatesController::class, 'profileKandidat'])->name('profileKandidat');
Route::get('/lowongan', [candidatesController::class, 'lowongan'])->name('lowongan');
Route::get('/status', [candidatesController::class, 'status'])->name('status');
Route::get('/statusDetail', [candidatesController::class, 'statusDetail'])->name('statusDetail');




Route::get('/dashboard', [recruiterController::class, 'index'])->name('dashboard');
Route::get('/postroom', [recruiterController::class, 'postroom'])->name('postroom');
Route::get('/postroom1', [recruiterController::class, 'detailPostroom'])->name('detailPostroom');
Route::get('/kandidat', [recruiterController::class, 'kandidat'])->name('kandidat');
Route::get('/profile', [candidatesController::class, 'profile'])->name('profile');
Route::get('/companyProfile', [recruiterController::class, 'companyProfile'])->name('companyProfile');
Route::get('/companyProfileSettings', [recruiterController::class, 'companyProfileSettings'])->name('companyProfileSettings');
