<?php

use Botble\Base\Facades\AdminHelper;
use Botble\Theme\Facades\Theme;
use FriendsOfBotble\Comment\Http\Controllers\CommentController;
use FriendsOfBotble\Comment\Http\Controllers\ReplyCommentController;
use FriendsOfBotble\Comment\Http\Controllers\Settings\CommentSettingController;
use FriendsOfBotble\Comment\Http\Controllers\Fronts\CommentController as FrontCommentController;
use FriendsOfBotble\Comment\Http\Controllers\Fronts\ReplyCommentController as FrontReplyCommentController;
use Illuminate\Support\Facades\Route;


Route::name('fob-comment.')->group(function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'comments', 'as' => 'comments.'], function () {
            Route::resource('', CommentController::class)->parameters(['' => 'comment']);
            Route::post('{comment}/reply', [ReplyCommentController::class, '__invoke'])->name('reply');
        });

        Route::group(['prefix' => 'settings', 'permission' => 'fob-comment.settings'], function () {
            Route::get('comment', [CommentSettingController::class, 'edit'])->name('settings');
            Route::put('comment', [CommentSettingController::class, 'update'])->name('settings.update');
        });
    });

    Theme::registerRoutes(function () {
        Route::prefix('fob-comment')->name('public.comments.')->group(function () {
            Route::get('comments', [FrontCommentController::class, 'index'])->name('index');
            Route::post('comments', [FrontCommentController::class, 'store'])->name('store');
            Route::post('comments/{comment}/reply', FrontReplyCommentController::class)->name('reply');
        });
    });
});
