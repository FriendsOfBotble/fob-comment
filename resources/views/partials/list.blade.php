<div class="fob-comment-list">
    @foreach($comments as $comment)
        @continue(! $comment->is_approved && $comment->ip_address !== request()->ip())

        <div id="comment-{{ $comment->getKey() }}" class="fob-comment-item">
            <div class="fob-comment-item-avatar">
                @if ($comment->website)
                    <a href="{{ $comment->website }}" target="_blank">
                        <img src="{{ $comment->avatar_url }}" alt="{{ $comment->name }}">
                    </a>
                @else
                    <img src="{{ $comment->avatar_url }}" alt="{{ $comment->name }}">
                @endif
            </div>
            <div class="fob-comment-item-content">
                <div class="fob-comment-item-body">
                    @if (! $comment->is_approved)
                        <em class="fob-comment-item-pending">
                            Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.
                        </em>
                    @endif

                    <p>{{ $comment->content }}</p>
                </div>

                <div class="fob-comment-item-footer">
                    <div class="fob-comment-item-info">
                        @if ($comment->website)
                            <a href="{{ $comment->website }}" class="fob-comment-item-author" target="_blank">
                                <h4 class="fob-comment-item-author">{{ $comment->name }}</h4>
                            </a>
                        @else
                        <h4 class="fob-comment-item-author">{{ $comment->name }}</h4>
                        @endif
                        <span class="fob-comment-item-date">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>

                    <a href="javascript:void(0)" class="fob-comment-item-reply" data-comment-id="{{ $comment->getKey() }}">Reply</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@if ($comments->hasPages())
    <div class="fob-comment-pagination">
        {{ $comments->links() }}
    </div>
@endif
