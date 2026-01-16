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
            'fob_comment_disable_guest_comment' => [$onOffRule],
            'fob_comment_comment_moderation' => [$onOffRule],
            'fob_comment_rate_limit_seconds' => ['nullable', 'integer', 'min:0'],
            'fob_comment_show_comment_cookie_consent' => [$onOffRule],
            'fob_comment_email_optional' => [$onOffRule],
            'fob_comment_show_website_field' => [$onOffRule],
            'fob_comment_auto_fill_comment_form' => [$onOffRule],
            'fob_comment_comment_order' => ['required', 'in:asc,desc'],
            'fob_comment_display_admin_badge' => [$onOffRule],
            'fob_comment_show_admin_role_name_for_admin_badge' => [$onOffRule],
            'fob_comment_avatar_provider' => ['required', 'in:gravatar,ui_avatars'],
            'fob_comment_default_avatar' => ['nullable', new MediaImageRule()],
            'fob_comment_allow_author_delete' => [$onOffRule],
            'fob_comment_primary_color' => ['nullable', 'string', 'max:20'],
            'fob_comment_primary_color_hover' => ['nullable', 'string', 'max:20'],
        ];
    }
}
