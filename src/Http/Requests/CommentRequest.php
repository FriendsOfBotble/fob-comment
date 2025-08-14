<?php

namespace FriendsOfBotble\Comment\Http\Requests;

use Botble\Base\Rules\EmailRule;
use Botble\Support\Http\Requests\Request;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Support\CommentHelper;
use Illuminate\Validation\Rule;

class CommentRequest extends Request
{
    public function rules(): array
    {
        $emailRules = CommentHelper::isEmailOptional()
            ? ['nullable', new EmailRule(), 'max:120']
            : ['required', new EmailRule(), 'max:120'];

        return [
            'content' => ['required', 'string', 'max:1000'],
            'name' => ['required', 'string', 'min:3', 'max:120'],
            'email' => $emailRules,
            'website' => ['nullable', 'url', 'max:255'],
            'status' => ['required', Rule::in(CommentStatus::values())],
        ];
    }
}
