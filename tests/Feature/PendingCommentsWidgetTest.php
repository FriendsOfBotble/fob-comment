<?php

namespace FriendsOfBotble\Comment\Tests\Feature;

use Botble\ACL\Models\User;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Http\Controllers\CommentController;
use FriendsOfBotble\Comment\Models\Comment;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

/**
 * Dashboard "Comments Awaiting Review" widget.
 *
 * CI also runs the suite with every plugin deactivated, so the tests skip in that run.
 *
 * @see platform/plugins/fob-comment/src/Http/Controllers/CommentController.php
 */
class PendingCommentsWidgetTest extends TestCase
{
    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();

        if (! class_exists(CommentController::class)) {
            $this->markTestSkipped('The fob-comment plugin is not active.');
        }

        $user = new User();
        $user->forceFill([
            'first_name' => 'Test',
            'last_name' => 'Admin',
            'email' => 'comment-widget-' . uniqid() . '@example.com',
            'password' => bcrypt('password'),
            'super_user' => 1,
        ]);
        $user->save();

        $this->actingAs($user);
    }

    protected function createComment(string $status, array $attributes = []): Comment
    {
        $comment = new Comment();
        $comment->forceFill(array_merge([
            'name' => 'Visitor',
            'email' => 'visitor@example.com',
            'content' => 'Nice article',
            'status' => $status,
            'reference_url' => 'https://example.com/post',
            'ip_address' => '127.0.0.1',
        ], $attributes));
        $comment->save();

        return $comment;
    }

    public function test_widget_lists_only_pending_comments(): void
    {
        $pending = $this->createComment(CommentStatus::PENDING, ['content' => 'Pending one']);
        $this->createComment(CommentStatus::APPROVED, ['content' => 'Approved one']);
        $this->createComment(CommentStatus::SPAM, ['content' => 'Spam one']);

        $captured = null;
        View::composer('plugins/fob-comment::widgets.pending-comments', function ($view) use (&$captured): void {
            $captured = $view->getData()['comments'];
        });

        $html = app(CommentController::class)->getWidgetPendingComments(Request::create('/', 'GET'))->toArray()['data'];

        $this->assertNotContains(CommentStatus::APPROVED, $captured->pluck('status')->map(fn ($status) => (string) $status)->all());
        $this->assertContains($pending->id, $captured->pluck('id')->all());
        $this->assertStringContainsString('Pending one', $html);
        $this->assertStringNotContainsString('Approved one', $html);
        $this->assertStringNotContainsString('Spam one', $html);
    }

    public function test_widget_does_not_fail_when_the_commented_model_class_is_missing(): void
    {
        $this->createComment(CommentStatus::PENDING, [
            'content' => 'Comment on a removed plugin model',
            'reference_type' => 'Botble\\Removed\\Models\\Thing',
            'reference_id' => 1,
        ]);

        $html = app(CommentController::class)->getWidgetPendingComments(Request::create('/', 'GET'))->toArray()['data'];

        $this->assertStringContainsString('Comment on a removed plugin model', $html);
    }

    public function test_pending_comment_can_be_approved_or_marked_as_spam_from_the_widget(): void
    {
        $approve = $this->createComment(CommentStatus::PENDING);
        $spam = $this->createComment(CommentStatus::PENDING);

        app(CommentController::class)->postWidgetModerateComment($approve, Request::create('/', 'POST', ['status' => CommentStatus::APPROVED]));
        app(CommentController::class)->postWidgetModerateComment($spam, Request::create('/', 'POST', ['status' => CommentStatus::SPAM]));

        $this->assertEquals(CommentStatus::APPROVED, (string) $approve->fresh()->status);
        $this->assertEquals(CommentStatus::SPAM, (string) $spam->fresh()->status);
    }

    public function test_widget_moderation_rejects_other_statuses(): void
    {
        $comment = $this->createComment(CommentStatus::PENDING);

        $this->expectException(ValidationException::class);

        app(CommentController::class)->postWidgetModerateComment($comment, Request::create('/', 'POST', ['status' => CommentStatus::TRASH]));
    }
}
