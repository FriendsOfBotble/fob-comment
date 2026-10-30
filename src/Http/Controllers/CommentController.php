<?php

namespace FriendsOfBotble\Comment\Http\Controllers;

use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Base\Http\Controllers\BaseController;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Forms\CommentForm;
use FriendsOfBotble\Comment\Http\Requests\AdminCommentRequest;
use FriendsOfBotble\Comment\Models\Comment;
use FriendsOfBotble\Comment\Tables\CommentTable;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CommentController extends BaseController
{
    public function index(CommentTable $commentTable)
    {
        $this->pageTitle(trans('plugins/fob-comment::comment.title'));

        return $commentTable->renderTable();
    }

    public function getWidgetPendingComments(Request $request)
    {
        $limit = $request->integer('paginate', 10);
        $limit = $limit > 0 ? min($limit, 100) : 10;

        $comments = Comment::query()
            ->select(['id', 'name', 'content', 'status', 'reference_id', 'reference_type', 'reference_url', 'created_at'])
            ->where('status', CommentStatus::PENDING)
            ->latest()
            ->orderByDesc('id')
            ->paginate($limit)
            ->appends(['paginate' => $limit]);

        // The commented model's plugin may be deactivated; loading a missing morph class would throw
        $comments->getCollection()
            ->filter(fn (Comment $comment) => $comment->reference_type && class_exists($comment->reference_type))
            ->load('reference');

        return $this
            ->httpResponse()
            ->setData(view('plugins/fob-comment::widgets.pending-comments', compact('comments', 'limit'))->render());
    }

    /**
     * Approve or mark a pending comment as spam straight from the dashboard widget.
     */
    public function postWidgetModerateComment(Comment $comment, Request $request)
    {
        $request->validate([
            'status' => ['required', Rule::in([CommentStatus::APPROVED, CommentStatus::SPAM])],
        ]);

        $comment->status = $request->input('status');
        $comment->save();

        return $this
            ->httpResponse()
            ->setMessage(
                $comment->status == CommentStatus::APPROVED
                    ? trans('plugins/fob-comment::comment.widget_approved')
                    : trans('plugins/fob-comment::comment.widget_marked_spam')
            );
    }

    public function edit(Comment $comment)
    {
        $this->pageTitle(trans('plugins/fob-comment::comment.edit_comment'));

        return CommentForm::createFromModel($comment)->renderForm();
    }

    public function update(Comment $comment, AdminCommentRequest $request)
    {
        CommentForm::createFromModel($comment)
            ->onlyValidatedData()
            ->setRequest($request)
            ->save();

        return $this
            ->httpResponse()
            ->setPreviousRoute('fob-comment.comments.index')
            ->withUpdatedSuccessMessage();
    }

    public function destroy(Comment $comment)
    {
        return DeleteResourceAction::make($comment);
    }
}
