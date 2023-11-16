<?php

use App\Http\Controllers\Student\StudentDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [StudentDashboardController::class, 'dashboardPage'])->name('dashboard');