<?php

use App\Http\Controllers\Teacher\TeacherDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [TeacherDashboardController::class, 'dashboardPage'])->name('dashboard');