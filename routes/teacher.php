<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherClassController;
use App\Http\Controllers\Teacher\TeacherLivewireController;
use App\Http\Controllers\Teacher\TeacherDashboardController;

Route::prefix('teacher')->name('teacher.')->middleware('auth', 'isactive', 'verified')->group(function () {
    // dashboard
    Route::get('dashboard', [TeacherDashboardController::class, 'dashboardPage'])->name('dashboard');

    // Livewire
    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('zoom', [TeacherLivewireController::class, 'zoomSetting'])->name('zoom');
    });

    // class
    Route::prefix('class')->name('class.')->group(function () {
        Route::get('/', [TeacherClassController::class, 'index'])->name('index');
        Route::get('all', [TeacherClassController::class, 'all'])->name('all');
        Route::get('show/{id}', [TeacherClassController::class, 'show'])->name('show');
        Route::post('create', [TeacherClassController::class, 'create'])->name('create');
        Route::get('delete/{id}', [TeacherClassController::class, 'delete'])->name('delete');
        Route::get('edit/{id}', [TeacherClassController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [TeacherClassController::class, 'update'])->name('update');
        Route::get('upcoming', [TeacherClassController::class, 'upcoming'])->name('upcoming');
        Route::get('previous', [TeacherClassController::class, 'previous'])->name('previous');
        Route::get('end/{id}', [TeacherClassController::class, 'end'])->name('end');
        Route::get('recover/{id}', [TeacherClassController::class, 'recover'])->name('recover');
        Route::get('users', [TeacherClassController::class, 'users'])->name('users');
    });
});
