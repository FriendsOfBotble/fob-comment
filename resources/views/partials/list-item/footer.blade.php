<div class="fob-comment-item-footer">
    <div class="fob-comment-item-info">
        @if (\FriendsOfBotble\Comment\Support\CommentHelper::isDisplayAdminBadge() && $comment->is_admin)
            <span class="fob-comment-item-admin-badge">
                @if (setting('fob_comment_show_admin_role_name_for_admin_badge', true) && $comment->author?->roles?->value('name'))
                    {{ $comment->author?->roles?->value('name') }}
                @else
                    {{ trans('plugins/fob-comment::comment.front.admin_badge') }}
                @endif
            </span>
        @endif
        @if ($comment->website)
            <a
                href="{{ $comment->website }}"
                class="fob-comment-item-author"
                target="_blank"
            >
                <h4 class="fob-comment-item-author">{{ $comment->name }}</h4>
            </a>
        @else
            <h4 class="fob-comment-item-author">{{ $comment->name }}</h4>
        @endif
        <span class="fob-comment-item-date">{{ $comment->created_at->diffForHumans() }}</span>
    </div>

    <div class="fob-comment-item-actions">
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

        @if ($currentUser && $comment->author_type === $currentUser::class && $comment->author_id === $currentUser->getKey())
            <a
                href="{{ route('fob-comment.public.comments.destroy', $comment) }}"
                class="fob-comment-item-delete"
                data-confirm="{{ trans('plugins/fob-comment::comment.front.list.delete_confirm') }}"
            >
                {{ trans('plugins/fob-comment::comment.front.list.delete') }}
            </a>
        @endif
    </div>
</div>
