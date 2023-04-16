<?php
declare(strict_types=1);

namespace App\Models\Admin;

class UserChannel extends \App\Models\UserChannel
{
    protected $appends = [
        "cover",
        "total"
    ];

    public function getTotalAttribute(): int
    {
        return  (new User())::query()->where("channel_uid", "=", $this->attributes["uid"])->count();
    }
    public function getCoverAttribute($key): string
    {
        return $this->getAttribute("qr_url") . $this->getAttribute("qr_path");
    }

    public static function getList(): array
    {
        $items = self::query()->where([
            ["is_show", "=", 1],
        ])->get(["uid", "title"]);
        $array = [];
        foreach ($items as $value) {
            $array[$value->uid] = $value->title;
        }
        return $array;
    }
}
