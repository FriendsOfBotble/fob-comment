<?php

namespace FriendsOfBotble\Comment\Forms\Fronts;

use Botble\Base\Forms\FieldOptions\EmailFieldOption;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\EmailField;
use Botble\Base\Forms\Fields\OnOffCheckboxField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FormAbstract;
use Botble\Base\Models\BaseModel;
use Botble\Captcha\Forms\Fields\ReCaptchaField;
use FriendsOfBotble\Comment\Http\Requests\Fronts\CommentRequest;
use FriendsOfBotble\Comment\Support\CommentHelper;
use Illuminate\Support\Arr;

class CommentForm extends FormAbstract
{
    public function setup(): void
    {
        $reference = $this->getData('reference');

        $preparedData = $this->prepareCommentData();

        $this
            ->contentOnly()
            ->setFormOption('class', 'fob-comment-form')
            ->setUrl(route('fob-comment.public.comments.store'))
            ->setValidatorClass(CommentRequest::class)
            ->columns()
            ->when(
                $reference instanceof BaseModel,
                function (FormAbstract $form) use ($reference) {
                    $form
                        ->add('reference_id', 'hidden', ['value' => $reference->getKey()])
                        ->add('reference_type', 'hidden', ['value' => $reference::class]);
                },
                fn (FormAbstract $form) => $form->add('reference_url', 'hidden', ['value' => url()->current()])
            )
            ->add(
                'content',
                TextareaField::class,
                TextareaFieldOption::make()->label(trans('plugins/fob-comment::comment.common.comment'))
                    ->required()
                    ->colspan(2)
                    ->toArray()
            )
            ->add(
                'name',
                TextField::class,
                TextFieldOption::make()->label(trans('plugins/fob-comment::comment.common.name'))
                    ->required()
                    ->defaultValue(Arr::get($preparedData, 'name'))
                    ->toArray()
            )
            ->add(
                'email',
                EmailField::class,
                EmailFieldOption::make()->label(trans('plugins/fob-comment::comment.common.email'))
                    ->required()
                    ->defaultValue(Arr::get($preparedData, 'email'))
                    ->toArray()
            )
            ->add(
                'website',
                TextField::class,
                TextFieldOption::make()->label(trans('plugins/fob-comment::comment.common.website'))
                    ->colspan(2)
                    ->defaultValue(Arr::get($preparedData, 'website'))
                    ->toArray()
            )
            ->when(
                CommentHelper::isEnableReCaptcha(),
                fn (FormAbstract $form) => $form->add('recaptcha', ReCaptchaField::class)
            )
            ->when(CommentHelper::isShowCommentCookieConsent(), function (FormAbstract $form) {
                $form->add(
                    'cookie_consent',
                    OnOffCheckboxField::class,
                    OnOffFieldOption::make()
                        ->label(trans('plugins/fob-comment::comment.front.form.cookie_consent'))
                        ->colspan(2)
                        ->toArray()
                );
            })
            ->add('button', 'submit', [
                'label' => trans('plugins/fob-comment::comment.front.form.submit'),
                'attr' => [
                    'class' => 'btn btn-primary',
                ],
                'colspan' => 2,
            ]);
    }

    protected function prepareCommentData(): array|null
    {
        if (! CommentHelper::isAutoFillCommentForm()) {
            return null;
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
