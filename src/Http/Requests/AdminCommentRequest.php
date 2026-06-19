<?php

namespace FriendsOfBotble\Comment\Http\Requests;

use FriendsOfBotble\Comment\Enums\CommentStatus;
use Illuminate\Validation\Rule;

class AdminCommentRequest extends CommentRequest
{
    public function rules(): array
    {
        return [
            ...parent::rules(),
            'status' => ['required', Rule::in(CommentStatus::values())],
        ];
    }
}
