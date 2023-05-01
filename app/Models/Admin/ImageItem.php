<?php
declare(strict_types = 1);

namespace App\Models\Admin;


use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageItem extends \App\Models\ImageItem
{
    protected $appends = [
        "cover"
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, "image_uid", "uid");
    }

    public function getCoverAttribute($key): string
    {
        return $this->getAttribute("url") . $this->getAttribute("path");
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_uid", "uid");
    }
}
