<?php

namespace FriendsOfBotble\Comment\Actions;

use Botble\Base\Models\BaseModel;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Contracts\Auth\Authenticatable;

class GetCommentReference
{
    public function __invoke(string $referenceType, string $referenceId): BaseModel
    {
        abort_unless(static::isAllowedType($referenceType), 404);

        /**
         * @var BaseModel $reference
         */
        $reference = $referenceType::query()->findOrFail($referenceId);

        return $reference;
    }

    /**
     * The reference type comes from the request, so only accept public content: models with a
     * front-end URL (registered with the slug helper), never accounts or internal records.
     */
    public static function isAllowedType(string $referenceType): bool
    {
        return class_exists($referenceType)
            && is_subclass_of($referenceType, BaseModel::class)
            && ! is_subclass_of($referenceType, Authenticatable::class)
            && SlugHelper::isSupportedModel($referenceType);
    }
}
