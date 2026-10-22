<?php

namespace FriendsOfBotble\Comment\Tests\Feature;

use Botble\ACL\Models\User;
use Botble\Base\Models\BaseModel;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Models\Comment;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PublicCommentPrivacyTest extends TestCase
{
    use DatabaseTransactions;

    public function test_public_response_hides_private_fields_and_other_visitors_pending_replies(): void
    {
        if (! class_exists(Comment::class)) {
            $this->markTestSkipped('The fob-comment plugin is not active.');
        }

        setting()->set('fob_comment_default_avatar', null);
        setting()->set('fob_comment_avatar_provider', 'gravatar');

        $url = 'https://example.com/comment-privacy-test';
        $attributes = [
            'name' => 'Privacy tester',
            'email' => 'private-comment@example.test',
            'ip_address' => '192.0.2.1',
            'user_agent' => 'private-comment-agent',
            'reference_type' => BaseModel::class,
            'reference_url' => $url,
            'status' => CommentStatus::APPROVED,
            'content' => 'Public parent',
        ];
        $parent = Comment::query()->create($attributes);
        $author = User::query()->create([
            'first_name' => 'Private',
            'last_name' => 'Author',
            'username' => 'comment-privacy-author',
            'email' => 'private-author@example.test',
            'password' => bcrypt('test-password'),
        ]);
        $parent->forceFill(['author_id' => $author->id, 'author_type' => User::class])->save();
        $reply = Comment::query()->create([...$attributes, 'reply_to' => $parent->id, 'content' => 'Public reply']);
        foreach ([$parent, $reply] as $ancestor) {
            foreach ([CommentStatus::PENDING, CommentStatus::SPAM, CommentStatus::TRASH] as $status) {
                Comment::query()->create([
                    ...$attributes,
                    'reply_to' => $ancestor->id,
                    'status' => $status,
                    'content' => "secret-{$status}-{$ancestor->id}",
                ]);
            }
        }
        Comment::query()->create([
            ...$attributes,
            'reply_to' => $reply->id,
            'ip_address' => '127.0.0.1',
            'status' => CommentStatus::PENDING,
            'content' => 'Own pending preview',
        ]);

        $response = $this->getJson(route('fob-comment.public.comments.index', ['reference_url' => $url]))->assertOk();
        $response->assertJsonPath('data.comments.data.0.id', $parent->id)
            ->assertJsonPath('data.comments.data.0.replies.0.id', $reply->id)
            ->assertJsonPath('data.comments.data.0.replies.0.replies.0.content', 'Own pending preview')
            ->assertSee('Own pending preview');
        foreach (['private-comment@example.test', 'private-comment%40example.test', 'private-author@example.test', '192.0.2.1', 'private-comment-agent', 'secret-', '"author"', '"ip_address"', '"user_agent"', '"email"'] as $private) {
            $response->assertDontSee($private, false);
        }
    }
}
