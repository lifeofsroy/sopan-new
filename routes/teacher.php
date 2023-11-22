<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ZoomController;
use App\Http\Controllers\Teacher\TeacherClassController;
use App\Http\Controllers\Teacher\TeacherLivewireController;
use App\Http\Controllers\Teacher\TeacherDashboardController;

Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::get('dashboard', [TeacherDashboardController::class, 'dashboardPage'])->name('dashboard');

    // Livewire
    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('zoom', [TeacherLivewireController::class, 'zoomSetting'])->name('zoom');
    });

    Route::prefix('class')->name('class.')->group(function () {
        Route::get('/', [TeacherClassController::class, 'index'])->name('index');
        Route::get('all', [TeacherClassController::class, 'all'])->name('all');
        Route::get('show/{id}', [TeacherClassController::class, 'show'])->name('show');
        Route::post('create', [TeacherClassController::class, 'create'])->name('create');
        Route::get('delete/{id}', [TeacherClassController::class, 'delete'])->name('delete');
        Route::get('edit/{id}', [TeacherClassController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [TeacherClassController::class, 'update'])->name('update');
    });


    // Zoom
    Route::name('meeting.')->group(function () {
        Route::get('upcoming', [ZoomController::class, 'getUpcomingMeeting'])->name('upcoming');
        Route::get('previous', [ZoomController::class, 'getPreviousMeetings'])->name('previous');
        Route::get('show/{id}', [ZoomController::class, 'showMeeting'])->name('show');
        Route::get('end/{id}', [ZoomController::class, 'endMeeting'])->name('end');
        Route::get('recover/{id}', [ZoomController::class, 'recoverMeeting'])->name('recover');
    });
});
