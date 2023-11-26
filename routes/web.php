<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainHomeController;
use App\Http\Controllers\Main\MainNewsController;
use App\Http\Controllers\Main\MainAboutController;
use App\Http\Controllers\Main\MainEventController;
use App\Http\Controllers\Main\MainDonateController;
use App\Http\Controllers\Main\MainContactController;
use App\Http\Controllers\Main\MainFaqController;
use App\Http\Controllers\Main\MainGalleryController;
use App\Http\Controllers\Main\MainPolicyController;
use App\Http\Controllers\Main\MainProductController;
use App\Http\Controllers\Main\MainProjectController;
use App\Http\Controllers\Main\MainTermsController;
use App\Http\Controllers\Main\MainVolunteerController;


Route::get('/', [MainHomeController::class, 'index'])->name('home');

Route::get('about', [MainAboutController::class, 'index'])->name('about');
Route::get('more-about-us', [MainAboutController::class, 'more'])->name('about.more');

Route::get('project', [MainProjectController::class, 'index'])->name('project');
Route::get('project/{slug}', [MainProjectController::class, 'deatil'])->name('project.detail');

Route::get('event', [MainEventController::class, 'index'])->name('event');
Route::get('event/{slug}', [MainEventController::class, 'detail'])->name('event.detail');

Route::get('news', [MainNewsController::class, 'index'])->name('news');
Route::get('news/{slug}', [MainNewsController::class, 'detail'])->name('news.detail');

Route::get('products', [MainProductController::class, 'index'])->name('product');
Route::get('products/{id}', [MainProductController::class, 'deatil'])->name('product.deatil');

Route::get('contact', [MainContactController::class, 'index'])->name('contact');
Route::get('volunteer', [MainVolunteerController::class, 'index'])->name('volunteer');
Route::get('donate', [MainDonateController::class, 'index'])->name('donate');
Route::get('faq', [MainFaqController::class, 'index'])->name('faq');
Route::get('gallery', [MainGalleryController::class, 'index'])->name('gallery');
Route::get('terms-and-conditions', [MainTermsController::class, 'index'])->name('term');
Route::get('privacy-policy', [MainPolicyController::class, 'privacy'])->name('policy.privacy');
Route::get('cookie-policy', [MainPolicyController::class, 'cookie'])->name('policy.cookie');









