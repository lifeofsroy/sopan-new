<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\AuthForgotController;
use App\Http\Controllers\Auth\AuthVerifyController;
use App\Http\Controllers\Auth\AuthSocialiteController;

// Login & Register
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthLoginController::class, 'loginPage'])->name('login');
    Route::post('login-post', [AuthLoginController::class, 'loginPost'])->name('login.post');
    Route::post('register-post', [AuthLoginController::class, 'registerPost'])->name('register.post');
});

// Password Reset
Route::middleware('guest')->group(function(){
    Route::post('forgot-password', [AuthForgotController::class, 'forgotPost'])->name('password.email');
    Route::get('reset-password/{token}', [AuthForgotController::class, 'resetPage'])->name('password.reset');
    Route::post('reset-password', [AuthForgotController::class, 'resetPost'])->name('password.update');
});

// Email Verification
Route::name('verification.')->middleware('auth')->group(function () {
    Route::get('/email/verify', [AuthVerifyController::class, 'verificationNotice'])->name('notice');
    Route::get('/email/verify/{id}/{hash}', [AuthVerifyController::class, 'verificationVerify'])->middleware('signed')->name('verify');
    Route::get('verify-mail', [AuthVerifyController::class, 'verifyPage'])->name('page');
    Route::post('/email/verification-notification', [AuthVerifyController::class, 'verificationResend'])->name('send');
    Route::post('/email/update', [AuthVerifyController::class, 'updateEmail'])->name('email.update');
});

// Google Login
Route::get('/auth/google', [AuthSocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [AuthSocialiteController::class, 'handleGoogleCallback']);

// User Logout
Route::get('logout', [AuthLoginController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('resetpage', function(){
    return view('pages.auth.resend');
});