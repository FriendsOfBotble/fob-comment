<?php

namespace FriendsOfBotble\Comment\Tests\Feature;

use Botble\Page\Models\Page;
use FriendsOfBotble\Comment\Models\Comment;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * reference_url links a comment to its page: URL-only pages load their comments by it,
 * and the admin and emails render it as a link. It was not fillable, so it was dropped
 * on save. Now that it is stored, it must be an http(s) URL of this site, including the
 * Referer fallback used for comments on a reference model.
 *
 * CI also runs the suite with every plugin deactivated, when the plugin's classes are
 * not autoloadable, so the tests skip in that run.
 */
class StoreCommentReferenceUrlTest extends TestCase
{
    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();

        if (! class_exists(Comment::class)) {
            $this->markTestSkipped('The fob-comment plugin is not active.');
        }
    }

    public function test_it_stores_the_url_of_the_page(): void
    {
        $url = url('fob-comment-store-test');

        $this
            ->postJson(route('fob-comment.public.comments.store'), $this->payload(['reference_url' => $url]))
            ->assertOk()
            ->assertJsonPath('error', false);

        $this->assertTrue(Comment::query()->where('reference_url', $url)->exists());
    }

    public function test_it_rejects_a_url_that_is_not_http(): void
    {
        $this->assertRejected(['reference_url' => 'javascript:alert(1)']);
    }

    public function test_it_rejects_a_url_of_another_site(): void
    {
        $this->assertRejected(['reference_url' => 'https://another-site.example/page']);
    }

    public function test_it_rejects_a_url_that_is_not_a_string(): void
    {
        $this->assertRejected(['reference_url' => ['https://another-site.example/page']]);
    }

    public function test_a_comment_on_a_model_stores_the_referring_page(): void
    {
        $page = $this->createPage();
        $url = url('fob-comment-referer-test');

        $this
            ->withHeader('Referer', $url)
            ->postJson(route('fob-comment.public.comments.store'), $this->payload($this->referenceOf($page)))
            ->assertOk()
            ->assertJsonPath('error', false);

        $this->assertTrue(
            Comment::query()->where('reference_id', $page->getKey())->where('reference_url', $url)->exists()
        );
    }

    public function test_a_comment_on_a_model_rejects_a_referer_of_another_site(): void
    {
        $page = $this->createPage();

        $this
            ->withHeader('Referer', 'https://another-site.example/page')
            ->postJson(route('fob-comment.public.comments.store'), $this->payload($this->referenceOf($page)))
            ->assertUnprocessable()
            ->assertJsonValidationErrors('reference_url');

        $this->assertFalse(Comment::query()->where('reference_id', $page->getKey())->exists());
    }

    protected function assertRejected(array $attributes): void
    {
        $this
            ->postJson(route('fob-comment.public.comments.store'), $this->payload($attributes))
            ->assertUnprocessable()
            ->assertJsonValidationErrors('reference_url');

        $this->assertFalse(Comment::query()->where('content', 'A reference URL test comment')->exists());
    }

    protected function payload(array $attributes): array
    {
        return [
            'name' => 'Tester',
            'email' => 'tester@example.com',
            'content' => 'A reference URL test comment',
            ...$attributes,
        ];
    }

    protected function createPage(): Page
    {
        return Page::query()->create(['name' => 'Comment reference URL test', 'content' => '']);
    }

    protected function referenceOf(Page $page): array
    {
        return ['reference_type' => $page::class, 'reference_id' => (string) $page->getKey()];
    }
}
