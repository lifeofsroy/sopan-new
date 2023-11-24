<?php

use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Student\StudentLivewireController;
use App\Http\Controllers\Student\StudentProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('student')->name('student.')->middleware('auth', 'isactive')->group(function () {
    // dashboard
    Route::get('dashboard', [StudentDashboardController::class, 'dashboardPage'])->name('dashboard');
    // Profile
    Route::name('profile.')->prefix('profile')->group(function () {
        Route::get('/', [StudentProfileController::class, 'profilePage'])->name('index');
        Route::post('detail-post', [StudentProfileController::class, 'profilePostDetail'])->name('post.detail');
        Route::post('password-post', [StudentProfileController::class, 'profilePostPassword'])->name('post.password');
        Route::post('avatar-update', [StudentProfileController::class, 'profileUpdateAvatar'])->name('update.avatar');
        Route::get('avatar-remove', [StudentProfileController::class, 'profileRemoveAvatar'])->name('remove.avatar');
        Route::post('resend-post', [StudentProfileController::class, 'resendUpdate'])->name('resend.mail');
    });

    // livewire
    Route::get('class', [StudentLivewireController::class, 'zoomClass'])->name('class');








});
