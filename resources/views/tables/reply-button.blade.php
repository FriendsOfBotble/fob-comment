<x-core::button
    type="button"
    color="primary"
    class="btn-icon"
    size="sm"
    data-bs-toggle="tooltip"
    data-bs-original-title="{{ trans('plugins/fob-comment::comment.reply') }}"
    data-url="{{ route('fob-comment.comments.reply', $action->getItem()->getKey()) }}"
>
    <x-core::icon
        name="ti ti-message-reply"
        data-bs-toggle="modal"
        data-bs-target="#reply-comment-modal"
    />
</x-core::button>
