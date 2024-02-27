<?php

namespace FriendsOfBotble\Comment\Models;

use Botble\Base\Models\BaseModel;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends BaseModel
{
    protected $table = 'fob_comments';

    protected $guarded = [];

    protected $casts = [
        'status' => CommentStatus::class,
    ];

    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    public function reference(): MorphTo
    {
        return $this->morphTo();
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(static::class, 'reply_to');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(static::class, 'reply_to');
    }

    protected function avatarUrl(): Attribute
    {
        return Attribute::get(function () {
            $email = strtolower(trim($this->email));
            $hash = hash('sha256', $email);

            return "https://www.gravatar.com/avatar/{$hash}?d=mp&s=128";
        });
    }

    protected function isApproved(): Attribute
    {
        return Attribute::get(fn () => $this->status == CommentStatus::APPROVED);
    }
}
