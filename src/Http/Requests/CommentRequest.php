<?php

namespace FriendsOfBotble\Comment\Http\Requests;

use Botble\Base\Rules\EmailRule;
use Botble\Captcha\Facades\Captcha;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class CommentRequest extends Request
{
    public function rules(): array
    {
        $rules = [
            'reference_id' => [Rule::when($this->has('reference_type'), 'required', 'nullable'), 'string'],
            'reference_type' => [Rule::when($this->has('reference_id'), 'required', 'nullable'), 'string'],
            'reference_url' => [Rule::when(! $this->has('reference_id') && ! $this->has('reference_type'), 'required', 'nullable'), 'string'],
            'content' => ['required', 'string', 'max:1000'],
            'name' => ['required', 'string', 'min:3', 'max:120'],
            'email' => ['required', new EmailRule(), 'max:120'],
            'website' => ['nullable', 'url', 'max:255'],
        ];

        if (is_plugin_active('captcha')) {
            $rules = [...$rules, ...Captcha::rules()];
        }

        return $rules;
    }

    public function attributes(): array
    {
        return is_plugin_active('captcha') ? Captcha::attributes() : [];
    }
}
