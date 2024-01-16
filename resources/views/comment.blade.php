@php
    Theme::asset()->add('fob-comment-css', asset('vendor/core/plugins/fob-comment/css/comment.css'));
    Theme::asset()->container('footer')->add('fob-comment-js', asset('vendor/core/plugins/fob-comment/js/comment.js'));

    use FriendsOfBotble\Comment\Forms\CommentForm;

    $form = CommentForm::create(data: ['reference' => $model ?? url()->current()]);
@endphp

<script>
    window.fobComment = {};

    window.fobComment = {
        listUrl: {{ Js::from(route('fob-comment.comments.index', isset($model) ? ['reference_type' => $model::class, 'reference_id' => $model->id] : url()->current())) }},
    }
</script>

<div class="fob-comment-list-section">
    <h3 class="fob-comment-list-title"></h3>
    <div class="fob-comment-list-wrapper"></div>
</div>

<div class="fob-comment-form-section">
    <h3 class="fob-comment-form-title">Leave a Reply</h3>
    <p class="fob-comment-form-note">Your email address will not be published. Required fields are marked *</p>

    {!! $form->renderForm() !!}
</div>

