<?php
declare(strict_types = 1);

namespace App\Models\User;

use App\Models\Series;

class SeriesModel extends Series
{
    protected $appends = [
        "select",
        "color",
        "icon",
    ];

    public function getSelectAttribute($key): bool
    {
        return false;
    }

    public function getColorAttribute($key): string
    {
        return "green";
    }

    public function getIconAttribute($key): string
    {
        return "tag";
    }
}
