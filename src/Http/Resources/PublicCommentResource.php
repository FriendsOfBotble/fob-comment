<?php

namespace FriendsOfBotble\Comment\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PublicCommentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->getKey(),
            'name' => $this->name,
            'website' => $this->website,
            'content' => $this->content,
            'status' => $this->status?->getValue(),
            'reply_to' => $this->reply_to,
            'created_at' => $this->created_at,
            'replies' => self::collection($this->whenLoaded('replies')),
        ];
    }
}
