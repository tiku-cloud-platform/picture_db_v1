<?php
declare(strict_types=1);

namespace App\Models;

class RelationLink extends BaseModel
{
    protected $table = "relation_link";

    protected $fillable = [
        "uid",
        "title",
        "path",
        "url",
        "type",
        "link_url",
        "params",
        "is_show",
        "app_id",
    ];

    protected $casts = [
        "uid" => "string",
    ];

    public function getLinkUrlAttribute($key): string
    {
        return empty($key) ? "" : $key;
    }

    public function getLinkAppIdAttribute($key): string
    {
        return empty($key) ? "" : $key;
    }

    public function getParamsAttribute($key): string
    {
        return empty($key) ? "" : $key;
    }
}
