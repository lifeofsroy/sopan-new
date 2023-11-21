<?php

use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->name('user.')->group(function(){
    Route::get('dashboard', [UserDashboardController::class, 'dashboardPage'])->name('dashboard');
});