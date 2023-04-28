<?php
declare(strict_types=1);

namespace App\Models;

class ImageItem extends BaseModel
{
    protected $table = "image_item";

    protected $fillable = [
        "uid",
        "user_uid",
        "author_uid",
        "image_uid",
        "url",
        "path",
        "download",
        "collect",
        "created_at",
        "updated_at",
    ];

    protected $casts = [
        "uid" => "string",
    ];

    public function getPathAttribute($key): string
    {
        return $key . "?imageMogr2/auto-orient/thumbnail/40000@/interlace/1/blur/1x0/quality/80|watermark/2/text/5YWU5YWU5om-5Zu-5b6u5L-h5bCP56iL5bqP/font/5b6u6L2v6ZuF6buR/fontsize/240/fill/I0ZGRkZGRg==/dissolve/80/gravity/SouthWest/dx/2/dy/2|imageslim";
    }
}
