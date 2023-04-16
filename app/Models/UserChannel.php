<?php
declare(strict_types=1);

namespace App\Models;

class UserChannel extends BaseModel
{
    protected $table = "user_channel";

    protected $fillable = [
        "uid",
        "title",
        "is_show",
        "created_at",
        "updated_at",
        "qr_url",
        "qr_path",
        "remark"
    ];
}
