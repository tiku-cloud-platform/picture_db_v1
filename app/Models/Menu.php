<?php
declare(strict_types=1);

namespace App\Models;

class Menu extends BaseModel
{
    protected $table = "menu";

    protected $fillable = [
        "uid",
        "title",
        "remark",
        "url",
        "path",
        "orders",
        "is_show",
        "navigate",
        "created_at",
        "updated_at",
    ];
}
