<?php

namespace FriendsOfBotble\Comment\Http\Controllers\Fronts\Concerns;

use Botble\Base\Http\Responses\BaseHttpResponse;
use FriendsOfBotble\Comment\Support\CommentHelper;
use Illuminate\Support\Facades\RateLimiter;

trait GuardsCommentSubmission
{
    protected function guardCommentSubmission(): ?BaseHttpResponse
    {
        if (CommentHelper::isGuestCommentDisabled() && ! CommentHelper::getAuthorizedUser()) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('plugins/fob-comment::comment.front.form.login_required'));
        }

        $rateLimitSeconds = CommentHelper::getRateLimitSeconds();

        if ($rateLimitSeconds > 0) {
            $key = 'fob-comment:' . request()->ip();

            if (RateLimiter::tooManyAttempts($key, 1)) {
                $seconds = RateLimiter::availableIn($key);

                return $this
                    ->httpResponse()
                    ->setError()
                    ->setMessage(trans('plugins/fob-comment::comment.front.rate_limit_error', ['seconds' => $seconds]));
            }

            RateLimiter::hit($key, $rateLimitSeconds);
        }

        return null;
    }
}
