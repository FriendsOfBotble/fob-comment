<?php

use Botble\Theme\Facades\Theme;
use FriendsOfBotble\Comment\Http\Controllers\Fronts\CommentController;
use Illuminate\Support\Facades\Route;

Theme::registerRoutes(function () {
    Route::prefix('fob-comment')->name('fob-comment.')->group(function () {
        Route::get('comments', [CommentController::class, 'index'])->name('comments.index');
        Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
    });
});
