<?php

namespace FriendsOfBotble\Comment\Tests\Feature;

use Botble\Base\Models\BaseModel;
use Botble\Page\Models\Page;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Models\Comment;
use FriendsOfBotble\Comment\Support\CommentHelper;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * The public comment count must only include approved comments of the given reference.
 * The status check used to sit outside the per-reference OR group, so pending, spam and
 * trashed comments of the reference were counted too. On pages whose comments are linked
 * by URL only, the count covered every URL-only comment on the site.
 *
 * CI also runs the suite with every plugin deactivated, when the plugin's classes are
 * not autoloadable, so the tests skip in that run.
 */
class CommentsCountTest extends TestCase
{
    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();

        if (! class_exists(CommentHelper::class)) {
            $this->markTestSkipped('The fob-comment plugin is not active.');
        }
    }

    public function test_it_counts_only_approved_comments(): void
    {
        $page = $this->createPage();

        $this->createComments($page, [
            CommentStatus::APPROVED,
            CommentStatus::APPROVED,
            CommentStatus::PENDING,
            CommentStatus::SPAM,
            CommentStatus::TRASH,
        ]);

        $this->assertSame(2, CommentHelper::getCommentsCount($page));
    }

    public function test_it_counts_each_reference_separately_when_loading_several(): void
    {
        $first = $this->createPage();
        $second = $this->createPage();
        $withoutApproved = $this->createPage();

        $this->createComments($first, [CommentStatus::APPROVED, CommentStatus::PENDING]);
        $this->createComments($second, [CommentStatus::APPROVED, CommentStatus::APPROVED, CommentStatus::SPAM]);
        $this->createComments($withoutApproved, [CommentStatus::PENDING]);

        $counter = CommentHelper::loadCommentsCount(collect([$first, $second, $withoutApproved]));

        $this->assertEquals(1, $counter[Page::class][$first->getKey()]);
        $this->assertEquals(2, $counter[Page::class][$second->getKey()]);
        $this->assertArrayNotHasKey($withoutApproved->getKey(), $counter[Page::class]);
        $this->assertSame(0, CommentHelper::getCommentsCount($withoutApproved));
    }

    public function test_it_returns_the_preloaded_count(): void
    {
        $page = $this->createPage();

        $this->createComments($page, [CommentStatus::APPROVED]);

        CommentHelper::loadCommentsCount([$page]);

        // Not in the preloaded counter, so a fresh query would return 2.
        $this->createComments($page, [CommentStatus::APPROVED]);

        $this->assertSame(1, CommentHelper::getCommentsCount($page));
    }

    public function test_it_does_not_query_for_an_empty_collection(): void
    {
        $this->createComments($this->createPage(), [CommentStatus::APPROVED]);

        $this->assertSame([], CommentHelper::loadCommentsCount(collect()));
        $this->assertSame([], CommentHelper::loadCommentsCount([]));
    }

    public function test_it_counts_url_comments_of_that_url_only(): void
    {
        $url = 'https://example.com/fob-comment-count-test';

        $this->createUrlComments($url, [CommentStatus::APPROVED, CommentStatus::APPROVED, CommentStatus::PENDING]);
        $this->createUrlComments($url . '-other', [CommentStatus::APPROVED]);

        $this->assertSame(2, CommentHelper::getCommentsCountByUrl($url));
        $this->assertSame(0, CommentHelper::getCommentsCountByUrl($url . '-missing'));
    }

    public function test_the_comment_list_shows_the_count_of_its_url(): void
    {
        $url = 'https://example.com/fob-comment-list-test';

        $this->createUrlComments($url, [CommentStatus::APPROVED, CommentStatus::APPROVED, CommentStatus::PENDING]);
        $this->createUrlComments($url . '-other', [CommentStatus::APPROVED, CommentStatus::APPROVED]);

        $this
            ->getJson(route('fob-comment.public.comments.index', ['reference_url' => $url]))
            ->assertOk()
            ->assertJsonPath('data.title', trans('plugins/fob-comment::comment.front.list.title_plural', ['count' => 2]));
    }

    protected function createPage(): Page
    {
        return Page::query()->create(['name' => 'Comment count test', 'content' => '']);
    }

    protected function createComments(Page $page, array $statuses): void
    {
        foreach ($statuses as $status) {
            $this->createComment($status, [
                'reference_id' => $page->getKey(),
                'reference_type' => $page::class,
            ]);
        }
    }

    /**
     * Stored like CreateNewComment stores a comment posted from a URL-only page.
     */
    protected function createUrlComments(string $url, array $statuses): void
    {
        foreach ($statuses as $status) {
            $this->createComment($status, [
                'reference_type' => BaseModel::class,
                'reference_url' => $url,
            ]);
        }
    }

    protected function createComment(string $status, array $attributes): void
    {
        Comment::query()->create([
            'name' => 'Tester',
            'email' => 'tester@example.com',
            'content' => 'A comment',
            'status' => $status,
            'ip_address' => '127.0.0.1',
            ...$attributes,
        ]);
    }
}
