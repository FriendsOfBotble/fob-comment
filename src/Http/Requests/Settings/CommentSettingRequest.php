<?php

namespace FriendsOfBotble\Comment\Http\Requests\Settings;

use Botble\Base\Rules\MediaImageRule;
use Botble\Base\Rules\OnOffRule;
use Botble\Support\Http\Requests\Request;

class CommentSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'fob_comment_enable_recaptcha' => [$onOffRule = new OnOffRule()],
            'fob_comment_comment_moderation' => [$onOffRule],
            'fob_comment_show_comment_cookie_consent' => [$onOffRule],
            'fob_comment_auto_fill_comment_form' => [$onOffRule],
            'fob_comment_comment_order' => ['required', 'in:asc,desc'],
            'fob_comment_display_admin_badge' => [$onOffRule],
            'fob_comment_show_admin_role_name_for_admin_badge' => [$onOffRule],
            'fob_comment_default_avatar' => ['nullable', new MediaImageRule()],
        ];
    }
}
