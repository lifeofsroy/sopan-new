<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ZoomController;
use App\Http\Controllers\Teacher\TeacherLivewireController;
use App\Http\Controllers\Teacher\TeacherDashboardController;

Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::get('dashboard', [TeacherDashboardController::class, 'dashboardPage'])->name('dashboard');
    // Livewire
    Route::get('all-meetings', [TeacherLivewireController::class, 'allMeeting'])->name('meeting.all');

    // Zoom
    Route::prefix('zoom')->group(function () {
        Route::get('all', [ZoomController::class, 'getAllMeeting'])->name('meeting.all');
        Route::get('create', [ZoomController::class, 'createMeeting'])->name('meeting.create');
        Route::get('update/{id}', [ZoomController::class, 'updateMeeting'])->name('meeting.update');
        Route::get('upcoming', [ZoomController::class, 'getUpcomingMeeting'])->name('meeting.upcoming');
        Route::get('previous', [ZoomController::class, 'getPreviousMeetings'])->name('meeting.previous');
        Route::get('delete/{id}', [ZoomController::class, 'deleteMeeting'])->name('meeting.delete');
        Route::get('show/{id}', [ZoomController::class, 'showMeeting'])->name('meeting.show');
        Route::get('end/{id}', [ZoomController::class, 'endMeeting'])->name('meeting.end');
        Route::get('recover/{id}', [ZoomController::class, 'recoverMeeting'])->name('meeting.recover');
    });
});
