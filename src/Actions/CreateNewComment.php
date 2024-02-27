<?php

namespace FriendsOfBotble\Comment\Actions;

use Botble\Base\Contracts\BaseModel;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Models\Comment;
use FriendsOfBotble\Comment\Support\CommentHelper;
use Illuminate\Http\Request;

class CreateNewComment
{
    public function __construct(protected Request $request)
    {

    }

    public function __invoke(BaseModel $reference, array $data, Comment|null $replyTo = null)
    {
        $data = [
            ...$data,
            'ip_address' => $this->request->ip(),
            'user_agent' => $this->request->userAgent(),
            'status' => CommentHelper::commentMustBeModerated() ? CommentStatus::PENDING : CommentStatus::APPROVED,
            'reference_id' => $reference->getKey(),
            'reference_type' => $reference::class,
        ];

        Comment::query()->create([
            ...$data,
            'reply_to' => $replyTo ? ($replyTo->reply_to ?: $replyTo->getKey()) : null,
        ]);
    }
}
