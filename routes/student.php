<?php

use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Student\StudentLivewireController;
use Illuminate\Support\Facades\Route;

Route::prefix('student')->name('student.')->group(function () {
    // dashboard
    Route::get('dashboard', [StudentDashboardController::class, 'dashboardPage'])->name('dashboard');

    // livewire
    Route::get('class', [StudentLivewireController::class, 'zoomClass'])->name('class');








});
