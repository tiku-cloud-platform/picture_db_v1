<?php
declare(strict_types = 1);

namespace App\Models;

class EmoImage extends BaseModel
{
    protected $table = "emo_image";

    protected $fillable = [
        "uid",
        "group_uid",
        "title",
        "img_back",
        "img",
        "width",
        "height",
        "is_show",
        "type",
        "path",
        "url"
    ];
}
