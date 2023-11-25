<?php

use App\Http\Controllers\Main\MainHomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainHomeController::class, 'index'])->name('home');
