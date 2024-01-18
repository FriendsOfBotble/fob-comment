<?php

namespace FriendsOfBotble\Comment\Actions;

use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Models\Comment;
use FriendsOfBotble\Comment\Support\CommentHelper;
use Illuminate\Http\Request;

class CreateNewComment
{
    public function __construct(protected Request $request)
    {

    }

    public function __invoke(array $data, ?Comment $comment = null)
    {
        $data = [
            ...$data,
            'ip_address' => $this->request->ip(),
            'user_agent' => $this->request->userAgent(),
            'status' => CommentHelper::commentMustBeModerated() ? CommentStatus::PENDING : CommentStatus::APPROVED,
        ];

        Comment::query()->create([
            ...$data,
            'reply_to' => $comment ? ($comment->reply_to ?: $comment->getKey()) : null,
        ]);
    }
}
