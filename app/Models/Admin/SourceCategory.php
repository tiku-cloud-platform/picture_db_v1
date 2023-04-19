<?php
declare(strict_types=1);

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SourceCategory extends \App\Models\SourceCategory
{
    protected $appends = [
        "cover"
    ];

    public static function getList(): array
    {
        $items = self::query()
            ->whereNull("parent_uid")
            ->where([["is_show", "=", 1],])
            ->get(["uid", "title"]);
        $array = [];
        foreach ($items as $value) {
            $array[$value->uid] = $value->title;
        }
        return $array;
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(SourceCategory::class, "parent_uid", "uid");
    }

    public function getCoverAttribute($key): string
    {
        return $this->getAttribute("url") . $this->getAttribute("path");
    }
}
