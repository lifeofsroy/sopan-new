<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', [AdminDashboardController::class, 'dashboardPage'])->name('dashboard');