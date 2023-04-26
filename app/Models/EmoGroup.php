<?php
declare(strict_types = 1);

namespace App\Models;

class EmoGroup extends BaseModel
{
    protected $table = "emo_group";

    protected $fillable = [
        "uid",
        "title",
        "views",
        "count",
        "is_show",
    ];
}
