<?php
declare(strict_types = 1);

namespace App\Models;

class SourceItem extends BaseModel
{
    protected $table = "source_item";

    protected $fillable = [
        "uid",
        "category_uid",
        "title",
        "is_show",
        "orders",
        "url",
        "path",
        "source_type",
        "content",
        "site_url",
    ];

    protected $casts = [
        "uid" => "string",
    ];
}
