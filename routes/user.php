<?php

use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [UserDashboardController::class, 'dashboardPage'])->name('dashboard');