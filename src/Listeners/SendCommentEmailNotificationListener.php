<?php

namespace FriendsOfBotble\Comment\Listeners;

use Botble\Base\Facades\EmailHandler;
use FriendsOfBotble\Comment\Events\CommentWasCreated;
use FriendsOfBotble\Comment\Models\Comment;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCommentEmailNotificationListener implements ShouldQueue
{
    public function handle(CommentWasCreated $event): void
    {
        $comment = $event->comment;

        $comment->loadMissing(['reference', 'comment']);

        $referenceTitle = $this->getReferenceTitle($comment);
        $commentUrl = $this->getCommentUrl($comment);

        if ($comment->reply_to) {
            $this->sendReplyNotification($comment, $referenceTitle, $commentUrl);
        }

        // Skip admin notification if the comment was posted by an admin
        if (! $comment->is_admin) {
            $this->sendNewCommentNotification($comment, $referenceTitle, $commentUrl);
        }
    }

    protected function sendNewCommentNotification(Comment $comment, string $referenceTitle, string $commentUrl): void
    {
        $args = [];

        if ($comment->email) {
            $args['replyTo'] = $comment->email;
        }

        EmailHandler::setModule('fob-comment')
            ->setVariableValues([
                'comment_name' => $comment->name,
                'comment_email' => $comment->email ?: '',
                'comment_content' => strip_tags($comment->content),
                'comment_reference' => $referenceTitle,
                'comment_url' => $commentUrl,
            ])
            ->sendUsingTemplate('admin_new_comment', null, $args);
    }

    protected function sendReplyNotification(Comment $comment, string $referenceTitle, string $commentUrl): void
    {
        $parentComment = $comment->comment;

        if (! $parentComment || ! $parentComment->email) {
            return;
        }

        $args = [];

        if ($comment->email) {
            $args['replyTo'] = $comment->email;
        }

        EmailHandler::setModule('fob-comment')
            ->setVariableValues([
                'comment_name' => $parentComment->name,
                'reply_name' => $comment->name,
                'reply_content' => strip_tags($comment->content),
                'comment_reference' => $referenceTitle,
                'comment_url' => $commentUrl,
            ])
            ->sendUsingTemplate('comment_reply', $parentComment->email, $args);
    }

    protected function getReferenceTitle(Comment $comment): string
    {
        $reference = $comment->reference;

        if (! $reference) {
            return $comment->reference_url ?: '';
        }

        return $reference->name ?? $reference->title ?? '';
    }

    protected function getCommentUrl(Comment $comment): string
    {
        $baseUrl = '';

        $reference = $comment->reference;

        if ($reference) {
            if (method_exists($reference, 'url')) {
                $baseUrl = $reference->url;
            } elseif (isset($reference->url)) {
                $baseUrl = $reference->url;
            }
        }

        if (! $baseUrl) {
            $baseUrl = $comment->reference_url ?: '';
        }

        if ($baseUrl) {
            return $baseUrl . '#comment-' . $comment->getKey();
        }

        return '';
    }
}
