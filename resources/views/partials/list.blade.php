@php
    $currentIndent ??= 0;

    if (!view()->exists($paginationView = Theme::getThemeNamespace('partials.pagination'))) {
        $paginationView = 'pagination::bootstrap-5';
    }

    // IP-based pending preview: matches WordPress behavior. Users behind shared NAT/proxy may
    // see each other's pending comments. Wrap in a setting if strict invisibility is required.
    $currentIp = \Botble\Base\Supports\Helper::getIpFromThirdParty();
    $allowAuthorDelete = \FriendsOfBotble\Comment\Support\CommentHelper::isAllowAuthorDelete();
    $currentUser = $allowAuthorDelete ? \FriendsOfBotble\Comment\Support\CommentHelper::getAuthorizedUser() : null;
@endphp

<div class="fob-comment-list">
    @foreach ($comments as $comment)
        @continue(!$comment->is_approved && $comment->ip_address !== $currentIp)

        <div
            id="comment-{{ $comment->getKey() }}"
            class="fob-comment-item"
        >
            <div class="fob-comment-item-inner">
                @include('plugins/fob-comment::partials.list-item.avatar', compact('comment'))
                <div class="fob-comment-item-content">
                    <div class="fob-comment-item-body">
                        @include('plugins/fob-comment::partials.list-item.body', compact('comment'))
                    </div>

                    @include('plugins/fob-comment::partials.list-item.footer', compact('comment', 'currentUser'))
                </div>
            </div>

            @if ($comment->replies->isNotEmpty())
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
        {{ $comments->appends(request()->except('page'))->links($paginationView) }}
    </div>
@endif
