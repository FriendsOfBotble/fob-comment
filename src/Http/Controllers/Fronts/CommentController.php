<?php

namespace FriendsOfBotble\Comment\Http\Controllers\Fronts;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Models\BaseModel;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Http\Requests\CommentReferenceRequest;
use FriendsOfBotble\Comment\Http\Requests\CommentRequest;
use FriendsOfBotble\Comment\Models\Comment;

class CommentController extends BaseController
{
    public function index(CommentReferenceRequest $request)
    {
        if ($request->input('reference_type')) {
            if (! class_exists($request->input('reference_type'))) {
                abort(404);
            }

            /**
             * @var BaseModel $reference
             */
            $reference = $request->input('reference_type')::query()->find($request->input('reference_id'));

            abort_if(! $reference, 404);

            $query = Comment::query()
                ->where('reference_id', $reference->getKey())
                ->where('reference_type', $reference::class);
        } else {
            $query = Comment::query()
                ->where('reference_url', $request->input('reference_url'));
        }

        $comments = $query
            ->where('status', CommentStatus::APPROVED)
            ->oldest()
            ->paginate();

        return $this
            ->httpResponse()
            ->setData([
                'title' => __(':count comment(s) for :reference', [
                    'count' => $comments->total(),
                    'reference' => $request->input('reference_url') ?? $reference->name,
                ]),
                'html' => view('plugins/fob-comment::partials.list', compact('comments'))->render(),
                'comments' => $comments,
            ]);
    }

    public function store(CommentRequest $request)
    {
        $data = [
            ...$request->validated(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ];

        if ($request->input('reference_type')) {
            if (! class_exists($request->input('reference_type'))) {
                abort(404);
            }

            /**
             * @var BaseModel $reference
             */
            $reference = $request->input('reference_type')::query()->find($request->input('reference_id'));

            abort_if(! $reference, 404);

            $data = [
                ...$data,
                'reference_id' => $reference->getKey(),
                'reference_type' => $reference::class,
            ];
        } else {
            $data['reference_url'] = $request->input('reference_url');
        }

        Comment::query()->create($data);

        return $this
            ->httpResponse()
            ->setMessage(__('Thank you for your comment.'));
    }
}
