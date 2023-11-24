<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherClassController;
use App\Http\Controllers\Teacher\TeacherLivewireController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Support\ZoomFacade;

Route::prefix('teacher')->name('teacher.')->middleware('auth', 'isactive')->group(function () {
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

Route::get('test', function(){

    $data = [
        "agenda" => 'this is my agenda',
        "topic" => 'this is my topic',
        "type" => 2,
        "duration" => 45,
        "timezone" => 'Asia/Kolkata',
        "password" => 'password',
        "start_time" => date('Y-m-d\TH:i:s\Z', strtotime(now()->addHours(4))),
        "pre_schedule" => false,
        "settings" => [
            'join_before_host' => false,
            'host_video' => false,
            'participant_video' => false,
            'mute_upon_entry' => false,
            'waiting_room' => false,
            'audio' => 'both',
            'auto_recording' => 'none',
            'approval_type' => 2,
        ]
    ];

    $meeting = ZoomFacade::createMeeting($data);
    dd((($meeting['data'])['settings'])['approval_type']);
});

