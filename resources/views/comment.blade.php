@php
    Theme::asset()->add('fob-comment-css', asset('vendor/core/plugins/fob-comment/css/comment.css'));
    Theme::asset()->container('footer')->add('fob-comment-js', asset('vendor/core/plugins/fob-comment/js/comment.js'));

    use FriendsOfBotble\Comment\Forms\Fronts\CommentForm;
@endphp

<script>
    window.fobComment = {};

    window.fobComment = {
        listUrl: {{ Js::from(route('fob-comment.public.comments.index', isset($model) ? ['reference_type' => $model::class, 'reference_id' => $model->id] : url()->current())) }},
    }
</script>

<div class="fob-comment-list-section" style="display: none">
    <h3 class="fob-comment-list-title"></h3>
    <div class="fob-comment-list-wrapper"></div>
</div>

<div class="fob-comment-form-section">
    <h3 class="fob-comment-form-title">{{ trans('plugins/fob-comment::comment.front.form.title') }}</h3>
    <p class="fob-comment-form-note">{{ trans('plugins/fob-comment::comment.front.form.description') }}</p>

    {!! CommentForm::createWithReference($model)->renderForm() !!}
</div>
