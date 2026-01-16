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
    @if (FriendsOfBotble\Comment\Support\CommentHelper::isGuestCommentDisabled() && ! FriendsOfBotble\Comment\Support\CommentHelper::getAuthorizedUser())
        <div class="fob-comment-form-login-required">
            <svg class="fob-comment-login-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
            </svg>
            <p class="fob-comment-login-message">{{ trans('plugins/fob-comment::comment.front.form.login_required') }}</p>
            @php
                $loginRoute = match (true) {
                    Route::has('public.member.login') => route('public.member.login'),
                    Route::has('login') => route('login'),
                    default => null,
                };
            @endphp
            @if ($loginRoute)
                <a href="{{ $loginRoute }}" class="fob-comment-login-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                    {{ trans('plugins/fob-comment::comment.front.form.login_to_comment') }}
                </a>
            @endif
        </div>
    @else
        <p class="fob-comment-form-note">
            @if (FriendsOfBotble\Comment\Support\CommentHelper::isEmailOptional())
                {{ trans('plugins/fob-comment::comment.front.form.description_email_optional') }}
            @else
                {{ trans('plugins/fob-comment::comment.front.form.description') }}
            @endif
        </p>

        {!! CommentForm::createWithReference($model)->renderForm() !!}
    @endif
</div>
