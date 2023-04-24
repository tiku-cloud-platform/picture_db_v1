<?php
declare(strict_types=1);

namespace App\Models\Admin;


class RelationLink extends \App\Models\RelationLink
{
    protected $appends = [
        "cover"
    ];

    public function getCoverAttribute($key): string
    {
        return $this->getAttribute("url") . $this->getAttribute("path");
    }
}
