<?php
declare(strict_types=1);

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SourceItem extends \App\Models\SourceItem
{
    protected $appends = [
        "cover"
    ];

    public function getCoverAttribute($key): string
    {
        return $this->getAttribute("url") . $this->getAttribute("path");
    }

    public static function getCategoryList(): array
    {
        $items = SourceCategory::query()
            ->whereNotNull("parent_uid")
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
        return $this->belongsTo(SourceCategory::class, "category_uid", "uid");
    }
}
