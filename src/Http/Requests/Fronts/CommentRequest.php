<?php

namespace FriendsOfBotble\Comment\Http\Requests\Fronts;

use Botble\Captcha\Facades\Captcha;
use Botble\Support\Http\Requests\Request;
use Closure;
use FriendsOfBotble\Comment\Http\Requests\CommentRequest as BaseCommentRequest;
use FriendsOfBotble\Comment\Support\CommentHelper;
use Illuminate\Validation\Rule;

class CommentRequest extends Request
{
    protected function prepareForValidation(): void
    {
        $preparedData = CommentHelper::preparedDataForFill();

        $this->merge($preparedData);

        // Comments on a reference model are not posted with a URL, so take the page they came
        // from. It comes from the Referer header, so it goes through the same rules below.
        if (! $this->filled('reference_url')) {
            $this->merge(['reference_url' => url()->previous()]);
        }
    }

    public function rules(): array
    {
        $rules = [
            'reference_id' => [Rule::when($this->has('reference_type'), 'required', 'nullable'), 'string'],
            'reference_type' => [Rule::when($this->has('reference_id'), 'required', 'nullable'), 'string'],
            // Stored and rendered as a link in the admin and in emails, so only http(s) URLs of
            // this site: the host the form posts to (multi-domain sites) or the generated site
            // URL (FORCE_ROOT_URL behind a proxy).
            'reference_url' => [
                'bail',
                Rule::when(! $this->has('reference_id') && ! $this->has('reference_type'), 'required', 'nullable'),
                'string',
                'url:http,https',
                'max:255',
                function (string $attribute, mixed $value, Closure $fail): void {
                    $siteHosts = array_map('strtolower', [$this->getHost(), (string) parse_url(url('/'), PHP_URL_HOST)]);

                    if (! in_array(strtolower((string) parse_url($value, PHP_URL_HOST)), $siteHosts, true)) {
                        $fail('validation.url')->translate();
                    }
                },
            ],
            ...(new BaseCommentRequest())->rules(),
        ];

        if (CommentHelper::isEnableReCaptcha()) {
            $rules = [...$rules, ...Captcha::rules()];
        }

        return $rules;
    }

    public function attributes(): array
    {
        $attributes = [
            'name' => trans('plugins/fob-comment::comment.common.name'),
            'email' => trans('plugins/fob-comment::comment.common.email'),
            'phone' => trans('plugins/fob-comment::comment.common.phone'),
            'content' => trans('plugins/fob-comment::comment.common.comment'),
            'website' => trans('plugins/fob-comment::comment.common.website'),
        ];

        if (CommentHelper::isEnableReCaptcha()) {
            $attributes = [...$attributes, ...Captcha::attributes()];
        }

        return $attributes;
    }
}
