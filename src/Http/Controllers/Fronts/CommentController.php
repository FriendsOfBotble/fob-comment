<?php

namespace FriendsOfBotble\Comment\Http\Controllers\Fronts;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Models\BaseModel;
use FriendsOfBotble\Comment\Actions\CreateNewComment;
use FriendsOfBotble\Comment\Actions\GetCommentReference;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Http\Controllers\Fronts\Concerns\GuardsCommentSubmission;
use FriendsOfBotble\Comment\Http\Requests\Fronts\CommentReferenceRequest;
use FriendsOfBotble\Comment\Http\Requests\Fronts\CommentRequest;
use FriendsOfBotble\Comment\Http\Resources\PublicCommentResource;
use FriendsOfBotble\Comment\Models\Comment;
use FriendsOfBotble\Comment\Support\CommentHelper;

class CommentController extends BaseController
{
    use GuardsCommentSubmission;

    public function index(CommentReferenceRequest $request, GetCommentReference $getCommentReference)
    {
        $reference = new BaseModel();

        if ($request->input('reference_type')) {
            $reference = $getCommentReference($request->input('reference_type'), $request->input('reference_id'));

            $query = Comment::query()
                ->where('reference_id', $reference->getKey())
                ->where('reference_type', $reference::class);
        } else {
            $query = Comment::query()
                ->where('reference_url', $request->input('reference_url'));
        }

        $visibleReplies = function ($query) use (&$visibleReplies): void {
            $query->visibleToIp(request()->ip())
                ->with(['author', 'replies' => $visibleReplies]);
        };

        $query
            ->visibleToIp(request()->ip())
            ->where('reply_to', null)
            ->with(['author', 'replies' => $visibleReplies])
            ->orderBy('created_at', CommentHelper::getCommentOrder());

        $comments = apply_filters('fob_comment_list_query', $query, $request)->paginate(10);

        $count = $request->input('reference_type')
            ? CommentHelper::getCommentsCount($reference)
            : CommentHelper::getCommentsCountByUrl($request->input('reference_url'));

        $view = apply_filters('fob_comment_list_view_path', 'plugins/fob-comment::partials.list');

        return $this
            ->httpResponse()
            ->setData([
                'title' => $count === 1
                    ? trans('plugins/fob-comment::comment.front.list.title_singular', ['count' => $count])
                    : trans('plugins/fob-comment::comment.front.list.title_plural', ['count' => $count]),
                'html' => view($view, compact('comments'))->render(),
                'comments' => $comments->through(fn (Comment $comment) => (new PublicCommentResource($comment))->resolve($request)),
            ]);
    }

    public function store(
        CommentRequest $request,
        CreateNewComment $createNewComment,
        GetCommentReference $getCommentReference
    ) {
        if ($response = $this->guardCommentSubmission()) {
            return $response;
        }

        $data = $request->validated();

        $reference = new BaseModel();

        if ($request->input('reference_type')) {
            $reference = $getCommentReference($request->input('reference_type'), $request->input('reference_id'));

            abort_if($reference->getMetaData('allow_comments', true) == '0', 404);
        }

        $comment = $createNewComment($reference, $data);

        $messageKey = $comment->status?->getValue() === CommentStatus::PENDING
            ? 'plugins/fob-comment::comment.front.comment_pending_approval_message'
            : 'plugins/fob-comment::comment.front.comment_success_message';

        return $this
            ->httpResponse()
            ->setMessage(trans($messageKey));
    }

    public function destroy(Comment $comment)
    {
        abort_unless(CommentHelper::isAllowAuthorDelete(), 404);

        $user = CommentHelper::getAuthorizedUser();

        abort_unless($user !== null, 403);
        abort_unless(
            $comment->author_type === $user::class && $comment->author_id === $user->getKey(),
            403,
            trans('plugins/fob-comment::comment.front.delete_not_authorized')
        );

        $comment->delete();

        return $this
            ->httpResponse()
            ->setMessage(trans('plugins/fob-comment::comment.front.comment_deleted_message'));
    }
}
