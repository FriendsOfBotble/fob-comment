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

    public function parent(): BelongsTo
    {
        return $this->belongsTo(static::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(static::class, 'parent_id');
    }

    protected function avatarUrl(): Attribute
    {
        return Attribute::get(function () {
            $address = strtolower(trim($this->email));
            $hash = hash('sha256', $address);

            return "https://www.gravatar.com/avatar/{$hash}";
        });
    }

    protected function isApproved(): Attribute
    {
        return Attribute::get(fn () => $this->status == CommentStatus::APPROVED);
    }
}
