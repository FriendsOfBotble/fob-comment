@php
    $canEdit = Auth::guard()->user()->hasPermission('fob-comment.comments.edit');
@endphp

@if ($comments->isNotEmpty())
    <div class="list-group list-group-flush">
        @foreach ($comments as $comment)
            @php
                $reference = $comment->relationLoaded('reference') ? $comment->reference : null;
                $referenceName = $reference?->name ?? $reference?->title;
                $hasSafeReferenceUrl = $comment->reference_url
                    && filter_var($comment->reference_url, FILTER_VALIDATE_URL)
                    && in_array(strtolower(parse_url($comment->reference_url, PHP_URL_SCHEME) ?? ''), ['http', 'https']);
            @endphp

            <div class="list-group-item">
                <div class="d-flex align-items-start gap-3">
                    @include('core/dashboard::partials.avatar', ['name' => $comment->name])
                    <div class="flex-fill min-w-0">
                        <div class="d-flex align-items-center gap-2">
                            @if ($canEdit)
                                <a
                                    href="{{ route('fob-comment.comments.edit', $comment->getKey()) }}"
                                    class="fw-medium text-reset text-truncate"
                                >{{ $comment->name }}</a>
                            @else
                                <span class="fw-medium text-truncate">{{ $comment->name }}</span>
                            @endif
                            @if ($comment->created_at)
                                <time
                                    class="ms-auto text-secondary small text-nowrap"
                                    datetime="{{ $comment->created_at->toIso8601String() }}"
                                    title="{{ BaseHelper::formatDateTime($comment->created_at) }}"
                                >{{ $comment->created_at->diffForHumans() }}</time>
                            @endif
                        </div>
                        <div class="text-break small">{{ Str::limit(strip_tags((string) $comment->content), 160) }}</div>

                        <div class="d-flex align-items-center gap-2 mt-2">
                            @if ($referenceName)
                                <div class="small text-secondary text-truncate me-auto">
                                    <x-core::icon name="ti ti-corner-down-right" size="sm" />
                                    @if ($hasSafeReferenceUrl)
                                        <a
                                            href="{{ $comment->reference_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="text-secondary"
                                        >{{ $referenceName }}</a>
                                    @else
                                        {{ $referenceName }}
                                    @endif
                                </div>
                            @else
                                <div class="me-auto"></div>
                            @endif

                            @if ($canEdit)
                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-success"
                                    data-bb-widget-action
                                    data-url="{{ route('fob-comment.comments.widget.moderate', $comment->getKey()) }}"
                                    data-payload='{"status":"{{ FriendsOfBotble\Comment\Enums\CommentStatus::APPROVED }}"}'
                                >
                                    <x-core::icon name="ti ti-check" />
                                    {{ trans('plugins/fob-comment::comment.widget_approve') }}
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-ghost-danger"
                                    data-bb-widget-action
                                    data-url="{{ route('fob-comment.comments.widget.moderate', $comment->getKey()) }}"
                                    data-payload='{"status":"{{ FriendsOfBotble\Comment\Enums\CommentStatus::SPAM }}"}'
                                >
                                    <x-core::icon name="ti ti-ban" />
                                    {{ trans('plugins/fob-comment::comment.widget_spam') }}
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if ($comments->hasPages())
        <x-core::card.footer>
            {{ $comments->links('core/base::components.simple-pagination') }}
        </x-core::card.footer>
    @endif
@else
    <x-core::empty-state
        icon="ti ti-circle-check"
        class="text-success"
        :title="trans('plugins/fob-comment::comment.widget_all_caught_up')"
        :subtitle="trans('plugins/fob-comment::comment.widget_no_pending_comments')"
    />
@endif
