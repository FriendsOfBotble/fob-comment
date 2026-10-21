<?php

namespace FriendsOfBotble\Comment\Tests\Unit;

use Botble\ACL\Models\User;
use Botble\Page\Models\Page;
use FriendsOfBotble\Comment\Actions\GetCommentReference;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\DataProvider;
use stdClass;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tests\TestCase;

/**
 * The reference type of a public comment comes straight from the request, so it must
 * only resolve to public content and never to an account, an internal record or an
 * arbitrary class with a static query().
 *
 * CI also runs the suite with every plugin deactivated, when the plugin's classes are
 * not autoloadable, so the tests skip in that run.
 */
class GetCommentReferenceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        if (! class_exists(GetCommentReference::class)) {
            $this->markTestSkipped('The fob-comment plugin is not active.');
        }
    }

    public static function rejectedReferenceTypes(): array
    {
        return [
            'admin account' => [User::class],
            'not a model' => [stdClass::class],
            'class with static query()' => [DB::class],
            'missing class' => ['App\\Models\\DoesNotExist'],
        ];
    }

    #[DataProvider('rejectedReferenceTypes')]
    public function test_it_rejects_reference_types_that_are_not_public_content(string $referenceType): void
    {
        $this->assertFalse(GetCommentReference::isAllowedType($referenceType));

        $this->expectException(NotFoundHttpException::class);

        (new GetCommentReference())($referenceType, '1');
    }

    public function test_it_accepts_public_content_models(): void
    {
        $this->assertTrue(GetCommentReference::isAllowedType(Page::class));
    }
}
