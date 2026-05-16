<?php

namespace FriendsOfBotble\Comment;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Botble\Setting\Models\Setting;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function deactivate(): void
    {
        // Preserve persistent data (comments table + settings) so re-activating restores state.
        // Only clear the runtime counter binding to avoid stale references for the remainder of the request.
        if (app()->bound('fob.comments.counter')) {
            app()->forgetInstance('fob.comments.counter');
        }
    }

    public static function remove(): void
    {
        Schema::dropIfExists('fob_comments');

        Setting::query()
            ->where('key', 'like', 'fob_comment_%')
            ->delete();
    }
}
