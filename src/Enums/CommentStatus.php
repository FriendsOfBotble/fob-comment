<?php

namespace FriendsOfBotble\Comment\Enums;

use Botble\Base\Supports\Enum;

class CommentStatus extends Enum
{
    public const PENDING = 'pending';

    public const APPROVED = 'approved';

    public const SPAM = 'spam';

    public const TRASH = 'trash';
}
