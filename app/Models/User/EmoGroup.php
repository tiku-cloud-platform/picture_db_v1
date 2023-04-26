<?php
declare(strict_types = 1);

namespace App\Models\User;


class EmoGroup extends \App\Models\EmoGroup
{
    protected $appends = ["img"];

    public function getImgAttribute(): array
    {
        return EmoImage::query()->where([
            ["group_uid", "=", $this->getAttribute("uid")],
            ["is_show", "=", 1]
        ])->limit(4)
            ->get(["path","url"])
            ->toArray();
    }
}
