<?php
declare(strict_types=1);

namespace App\Models;

class SourceCategory extends BaseModel
{
    protected $table = "source_category";

    protected $fillable = [
        "uid",
        "title",
        "is_show",
        "orders",
        "parent_uid"
    ];
}
