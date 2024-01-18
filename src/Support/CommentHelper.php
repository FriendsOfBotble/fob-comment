<?php

namespace FriendsOfBotble\Comment\Support;

use Botble\Captcha\Facades\Captcha;

class CommentHelper
{
    public static function isEnableReCaptcha(): bool
    {
        return is_plugin_active('captcha') && setting('fob_comment_enable_recaptcha', false) && Captcha::isEnabled();
    }

    public static function commentMustBeModerated(): bool
    {
        return setting('fob_comment_comment_moderation', false);
    }

    public static function getCommentOrder(): string
    {
        $order = setting('fob_comment_comment_order', 'asc');

        if (! in_array($order, ['asc', 'desc'])) {
            $order = 'asc';
        }

        return $order;
    }

    public static function isShowCommentCookieConsent(): bool
    {
        return setting('fob_comment_show_comment_cookie_consent', true);
    }
}
