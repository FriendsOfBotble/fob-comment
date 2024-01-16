<?php

namespace FriendsOfBotble\Comment\Forms;

use Botble\Base\Forms\FieldOptions\CheckboxFieldOption;
use Botble\Base\Forms\FieldOptions\EmailFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\EmailField;
use Botble\Base\Forms\Fields\OnOffCheckboxField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FormAbstract;
use Botble\Base\Models\BaseModel;
use FriendsOfBotble\Comment\Http\Requests\CommentRequest;

class CommentForm extends FormAbstract
{
    public function setup(): void
    {
        $reference = $this->getData('reference');

        $this
            ->contentOnly()
            ->setFormOption('class', 'fob-comment-form')
            ->setUrl(route('fob-comment.comments.store'))
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
                TextareaFieldOption::make()->label('Content')
                    ->required()
                    ->colspan(2)
                    ->toArray()
            )
            ->add(
                'name',
                TextField::class,
                TextFieldOption::make()->label('Name')
                    ->required()
                    ->toArray()
            )
            ->add(
                'email',
                EmailField::class,
                EmailFieldOption::make()->label('Email')
                    ->required()
                    ->toArray()
            )
            ->add(
                'website',
                TextField::class,
                TextFieldOption::make()->label('Website')
                    ->colspan(2)
                    ->toArray()
            )
            ->add(
                'remember',
                OnOffCheckboxField::class,
                CheckboxFieldOption::make()
                    ->label('Remember my name, email, and website in this browser for the next time I comment.')
                    ->colspan(2)
                    ->toArray()
            )
            ->add('button', 'submit', [
                'label' => 'Post Comment',
                'attr' => [
                    'class' => 'btn btn-primary',
                ],
                'colspan' => 2,
            ]);
    }
}
