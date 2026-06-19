@if (!$comment->is_approved)
    <em class="fob-comment-item-pending">
        {{ trans('plugins/fob-comment::comment.front.list.waiting_for_approval_message') }}
    </em>
@endif
@if ($comment->is_admin)
    {!! BaseHelper::clean($comment->formatted_content) !!}
@else
    <p>{!! $comment->formatted_content !!}</p>
@endif
