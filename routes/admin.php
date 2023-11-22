<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->middleware('auth', 'isadmin')->group(function(){
    Route::get('dashboard', [AdminDashboardController::class, 'dashboardPage'])->name('dashboard');
});