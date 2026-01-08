@php
    Theme::asset()->add('fob-comment-css', asset('vendor/core/plugins/fob-comment/css/comment.css'), version: '1.2.3');
    Theme::asset()
        ->container('footer')
        ->add('fob-comment-js', asset('vendor/core/plugins/fob-comment/js/comment.js'), ['jquery'], version: '1.2.3');

    Theme::registerToastNotification();

    use FriendsOfBotble\Comment\Forms\Fronts\CommentForm;

    $fobPrimaryColor = setting('fob_comment_primary_color');
    $fobPrimaryColorHover = setting('fob_comment_primary_color_hover');
@endphp

@if ($fobPrimaryColor || $fobPrimaryColorHover)
    <style>
        :root {
            @if ($fobPrimaryColor)
                --fob-primary-color: {{ $fobPrimaryColor }};
            @endif
            @if ($fobPrimaryColorHover)
                --fob-primary-color-hover: {{ $fobPrimaryColorHover }};
            @endif
        }
    </style>
@endif

<script>
    window.fobComment = {
        listUrl: {{ Js::from(route('fob-comment.public.comments.index', isset($model) ? ['reference_type' => $model::class, 'reference_id' => $model->id] : url()->current())) }},
        csrfToken: {{ Js::from(csrf_token()) }},
    };
</script>

<div class="fob-comment-list-section">
    <div class="fob-comment-list-loading">
        <div class="fob-comment-skeleton-title"></div>
        @for ($i = 0; $i < 2; $i++)
            <div class="fob-comment-skeleton-item">
                <div class="fob-comment-skeleton-avatar"></div>
                <div class="fob-comment-skeleton-content">
                    <div class="fob-comment-skeleton-name"></div>
                    <div class="fob-comment-skeleton-text"></div>
                    <div class="fob-comment-skeleton-text short"></div>
                </div>
            </div>
        @endfor
    </div>
    <div class="fob-comment-list-content" style="display: none">
        <h4 class="fob-comment-title fob-comment-list-title"></h4>
        <div class="fob-comment-list-wrapper"></div>
    </div>
</div>

<div class="fob-comment-form-section">
    <h4 class="fob-comment-title fob-comment-form-title">
        <span class="d-inline-block">{{ trans('plugins/fob-comment::comment.front.form.title') }}</span>
    </h4>
    <p class="fob-comment-form-note">
        @if (FriendsOfBotble\Comment\Support\CommentHelper::isEmailOptional())
            {{ trans('plugins/fob-comment::comment.front.form.description_email_optional') }}
        @else
            {{ trans('plugins/fob-comment::comment.front.form.description') }}
        @endif
    </p>

    {!! CommentForm::createWithReference($model)->renderForm() !!}
</div>
