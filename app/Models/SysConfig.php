<?php
declare(strict_types=1);

namespace App\Models;

class SysConfig extends BaseModel
{
    protected $table = "sys_config";

    protected $fillable = [
        "key",
        "value",
        "describe",
        "uid",
        "title"
    ];
}
