<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainHomeController;
use App\Http\Controllers\Main\MainNewsController;
use App\Http\Controllers\Main\MainAboutController;
use App\Http\Controllers\Main\MainEventController;
use App\Http\Controllers\Main\MainDonateController;
use App\Http\Controllers\Main\MainContactController;
use App\Http\Controllers\Main\MainProjectController;
use App\Http\Controllers\Main\MainVolunteerController;


Route::get('/', [MainHomeController::class, 'index'])->name('home');
Route::get('about', [MainAboutController::class, 'index'])->name('about');
Route::get('project', [MainProjectController::class, 'index'])->name('project');
Route::get('event', [MainEventController::class, 'index'])->name('event');
Route::get('news', [MainNewsController::class, 'index'])->name('news');
Route::get('contact', [MainContactController::class, 'index'])->name('contact');
Route::get('volunteer', [MainVolunteerController::class, 'index'])->name('volunteer');
Route::get('donate', [MainDonateController::class, 'index'])->name('donate');








