<?php

namespace FriendsOfBotble\Comment\Http\Controllers\Fronts;

use Botble\Base\Contracts\BaseModel;
use Botble\Base\Http\Controllers\BaseController;
use FriendsOfBotble\Comment\Actions\CreateNewComment;
use FriendsOfBotble\Comment\Actions\GetCommentReference;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Http\Controllers\Fronts\Concerns\GuardsCommentSubmission;
use FriendsOfBotble\Comment\Http\Requests\Fronts\ReplyCommentRequest;
use FriendsOfBotble\Comment\Models\Comment;

class ReplyCommentController extends BaseController
{
    use GuardsCommentSubmission;

    public function __invoke(string|int $commentId, ReplyCommentRequest $request, CreateNewComment $createNewComment)
    {
        $parent = Comment::query()
            ->where('status', CommentStatus::APPROVED)
            ->with('reference')
            ->findOrFail($commentId);

        $reference = $parent->reference;

        abort_unless($reference instanceof BaseModel && GetCommentReference::isAllowedType($reference::class), 404);
        abort_if($reference->getMetaData('allow_comments', true) == '0', 404);

        if ($response = $this->guardCommentSubmission()) {
            return $response;
        }

        $reply = $createNewComment($reference, $request->validated(), $parent);

        $messageKey = $reply->status?->getValue() === CommentStatus::PENDING
            ? 'plugins/fob-comment::comment.front.comment_pending_approval_message'
            : 'plugins/fob-comment::comment.front.comment_success_message';

        return $this
            ->httpResponse()
            ->setMessage(trans($messageKey));
    }
}
