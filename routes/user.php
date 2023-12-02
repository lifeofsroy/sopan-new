<?php

use App\Http\Controllers\User\UserChatController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->name('user.')->middleware('auth', 'isactive')->group(function () {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('chat')->name('chat.')->group(function () {
        Route::get('/', [UserChatController::class, 'index'])->name('index');
        Route::post('/idInfo', [UserChatController::class, 'idFetchData']);
        Route::post('/sendMessage', [UserChatController::class, 'send'])->name('send.message');
        Route::post('/fetchMessages', [UserChatController::class, 'fetch'])->name('fetch.messages');
        Route::get('/download/{fileName}', [UserChatController::class, 'download'])->name('file.download');
        Route::post('/auth', [UserChatController::class, 'pusherAuth'])->name('pusher.auth');
        Route::post('/makeSeen', [UserChatController::class, 'seen'])->name('messages.seen');
        Route::get('/getContacts', [UserChatController::class, 'getContacts'])->name('contacts.get');
        Route::post('/updateContacts', [UserChatController::class, 'updateContactItem'])->name('contacts.update');
        Route::post('/star', [UserChatController::class, 'favorite'])->name('star');
        Route::post('/favorites', [UserChatController::class, 'getFavorites'])->name('favorites');
        Route::get('/search', [UserChatController::class, 'search'])->name('search');
        Route::post('/shared', [UserChatController::class, 'sharedPhotos'])->name('shared');
        Route::post('/deleteConversation', [UserChatController::class, 'deleteConversation'])->name('conversation.delete');
        Route::post('/deleteMessage', [UserChatController::class, 'deleteMessage'])->name('message.delete');
        Route::post('/updateSettings', [UserChatController::class, 'updateSettings'])->name('avatar.update');
        Route::post('/setActiveStatus', [UserChatController::class, 'setActiveStatus'])->name('activeStatus.set');
        Route::get('/group/{id}', [UserChatController::class, 'group'])->name('group');
        Route::get('/{id}', [UserChatController::class, 'user'])->name('user');
    });
});
