<?php

use App\Http\Controllers\Student\StudentDashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('student')->name('student.')->group(function(){
    Route::get('dashboard', [StudentDashboardController::class, 'dashboardPage'])->name('dashboard');
});