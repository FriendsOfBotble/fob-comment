@php
    $currentIndent ??= 0;
@endphp

<div class="fob-comment-list">
    @foreach($comments as $comment)
        @continue(! $comment->is_approved && $comment->ip_address !== request()->ip())

        <div id="comment-{{ $comment->getKey() }}" class="fob-comment-item">
            <div class="fob-comment-item-inner">
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
                                {{ trans('plugins/fob-comment::comment.front.list.waiting_for_approval_message') }}
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

                        @if ($comment->is_approved)
                            <a
                                href="{{ route('fob-comment.public.comments.reply', $comment) }}"
                                class="fob-comment-item-reply"
                                data-comment-id="{{ $comment->getKey() }}"
                                data-reply-to="{{ $replyLabel = trans('plugins/fob-comment::comment.front.list.reply_to', ['name' => $comment->name]) }}"
                                data-cancel-reply="{{ trans('plugins/fob-comment::comment.front.list.cancel_reply') }}"
                                aria-label="{{ $replyLabel }}"
                            >
                                {{ trans('plugins/fob-comment::comment.front.list.reply') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            @if ($comment->replies->count())
                @include('plugins/fob-comment::partials.list', [
                    'comments' => $comment->replies,
                    'currentIndent' => $currentIndent + 1,
                ])
            @endif
        </div>
    @endforeach
</div>

@if ($comments instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator && $comments->hasPages())
    <div class="fob-comment-pagination">
        {{ $comments->appends(request()->except('page'))->links() }}
    </div>
@endif
