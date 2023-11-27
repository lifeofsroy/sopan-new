<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLivewireController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->middleware('auth', 'isadmin')->group(function(){
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('page')->name('page.')->group(function(){
        Route::get('home', [AdminLivewireController::class, 'home'])->name('home');
        Route::get('about', [AdminLivewireController::class, 'about'])->name('about');
        Route::get('project', [AdminLivewireController::class, 'project'])->name('project');
        Route::get('event', [AdminLivewireController::class, 'event'])->name('event');
        Route::get('news', [AdminLivewireController::class, 'news'])->name('news');
        Route::get('contact', [AdminLivewireController::class, 'contact'])->name('contact');
    });

    Route::prefix('section')->name('section.')->group(function(){
        //
    });
});