<?php

namespace FriendsOfBotble\Comment\Models;

use Botble\ACL\Contracts\HasPermissions;
use Botble\Base\Models\BaseModel;
use Botble\Media\Facades\RvMedia;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends BaseModel
{
    protected $table = 'fob_comments';

    protected $fillable = [
        'name',
        'email',
        'website',
        'content',
        'status',
        'author_id',
        'author_type',
        'reference_id',
        'reference_type',
        'reply_to',
        'ip_address',
        'user_agent',
    ];

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
            if ($this->author && $this->author->avatar_url) {
                return $this->author->avatar_url;
            }

            if ($defaultAvatar = setting('fob_comment_default_avatar')) {
                return RvMedia::getImageUrl($defaultAvatar, 'thumb');
            }

            $avatarProvider = setting('fob_comment_avatar_provider', 'gravatar');

            // If email is not provided or using UI Avatars, generate avatar based on name
            if (empty($this->email) || $avatarProvider === 'ui_avatars') {
                // Use UI Avatars service for name-based avatars
                $name = urlencode($this->name);
                $background = substr(md5($this->name), 0, 6); // Generate color from name

                return "https://ui-avatars.com/api/?name={$name}&size=128&background={$background}&color=fff&bold=true";
            }

            // Use Gravatar for email-based avatars
            $email = strtolower(trim($this->email));
            $hash = hash('sha256', $email);

            $default = urlencode("https://unavatar.io/$email");

            return "https://www.gravatar.com/avatar/$hash?d=mp&s=128&d=$default";
        });
    }

    protected function isApproved(): Attribute
    {
        return Attribute::get(fn () => $this->status == CommentStatus::APPROVED);
    }

    protected function isAdmin(): Attribute
    {
        return Attribute::get(
            fn () => $this->author && (
                $this->author instanceof HasPermissions
                && $this->author->hasPermission('fob-comment.comments.reply')
            )
        );
    }

    protected function formattedContent(): Attribute
    {
        return Attribute::get(function () {
            if (! $this->is_admin) {
                return strip_tags($this->content);
            }

            return preg_replace('/<p[^>]*><\\/p[^>]*>/', '', $this->content);
        });
    }
}
