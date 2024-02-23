<?php

namespace FriendsOfBotble\Comment\Actions;

use Botble\Base\Models\BaseModel;

class GetCommentReference
{
    public function __invoke(string $referenceType, string $referenceId): BaseModel
    {
        if (! class_exists($referenceType)) {
            abort(404);
        }

        /**
         * @var BaseModel $reference
         */
        $reference = $referenceType::query()->findOrFail($referenceId);

        return $reference;
    }
}
