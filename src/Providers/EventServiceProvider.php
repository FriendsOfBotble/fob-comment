<?php

namespace FriendsOfBotble\Comment\Providers;

use FriendsOfBotble\Comment\Events\CommentWasCreated;
use FriendsOfBotble\Comment\Listeners\SendCommentEmailNotificationListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        CommentWasCreated::class => [
            SendCommentEmailNotificationListener::class,
        ],
    ];
}
