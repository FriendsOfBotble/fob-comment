<?php

namespace FriendsOfBotble\Comment\Forms\Settings;

use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\RadioFieldOption;
use Botble\Base\Forms\Fields\OnOffCheckboxField;
use Botble\Base\Forms\Fields\RadioField;
use Botble\Setting\Forms\SettingForm;
use FriendsOfBotble\Comment\Http\Requests\Settings\CommentSettingRequest;
use FriendsOfBotble\Comment\Support\CommentHelper;

class CommentSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $this
            ->setValidatorClass(CommentSettingRequest::class)
            ->setSectionTitle(trans('plugins/fob-comment::comment.settings.title'))
            ->setSectionDescription(trans('plugins/fob-comment::comment.settings.description'))
            ->add(
                'fob_comment_enable_recaptcha',
                OnOffCheckboxField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/fob-comment::comment.settings.form.enable_recaptcha'))
                    ->value(CommentHelper::isEnableReCaptcha())
                    ->toArray()
            )
            ->add(
                'fob_comment_comment_moderation',
                OnOffCheckboxField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/fob-comment::comment.settings.form.comment_moderation'))
                    ->helperText(trans('plugins/fob-comment::comment.settings.form.comment_moderation_help'))
                    ->value(CommentHelper::commentMustBeModerated())
                    ->toArray()
            )
            ->add(
                'fob_comment_show_comment_cookie_consent',
                OnOffCheckboxField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/fob-comment::comment.settings.form.show_comment_cookie_consent'))
                    ->value(CommentHelper::isShowCommentCookieConsent())
                    ->toArray()
            )
            ->add(
                'fob_comment_comment_order',
                RadioField::class,
                RadioFieldOption::make()
                    ->label(trans('plugins/fob-comment::comment.settings.form.comment_order'))
                    ->helperText('Choose the preferred order for displaying comments in the list.')
                    ->choices([
                        'asc' => trans('plugins/fob-comment::comment.settings.form.comment_order_choices.asc'),
                        'desc' => trans('plugins/fob-comment::comment.settings.form.comment_order_choices.desc'),
                    ])
                    ->selected(CommentHelper::getCommentOrder())
                    ->toArray()
            );
    }
}
