<?php
declare(strict_types=1);

namespace App\Models\Admin;

class Menu extends \App\Models\Menu
{
    protected $appends = [
        "cover"
    ];

    public function getCoverAttribute($key): string
    {
        return $this->getAttribute("url") . $this->getAttribute("path");
    }
}
