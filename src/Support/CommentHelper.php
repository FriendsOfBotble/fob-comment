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

    public static function isAutoFillCommentForm(): bool
    {
        return setting('fob_comment_auto_fill_comment_form', true);
    }

    public static function preparedDataForFill(): array
    {
        if (! CommentHelper::isAutoFillCommentForm()) {
            return [];
        }

        $data = [];

        $guard = match (true) {
            is_plugin_active('member') => 'member',
            is_plugin_active('real-estate') => 'account',
            is_plugin_active('ecommerce') => 'customer',
            default => null,
        };

        if ($guard) {
            $user = auth($guard)->user();

            if ($user) {
                $data['name'] = $user->name;
                $data['email'] = $user->email;
            }
        }

        return apply_filters('fob_comment_prepare_comment_data', $data);
    }
}
