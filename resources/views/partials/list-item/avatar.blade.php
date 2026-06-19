<div class="fob-comment-item-avatar">
    @if ($comment->website)
        <a
            href="{{ $comment->website }}"
            target="_blank"
        >
            <img
                src="{{ $comment->avatar_url }}"
                alt="{{ $comment->name }}"
            >
        </a>
    @else
        <img
            src="{{ $comment->avatar_url }}"
            alt="{{ $comment->name }}"
        >
    @endif
</div>
