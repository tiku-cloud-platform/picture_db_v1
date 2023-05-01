<?php
declare(strict_types = 1);

namespace App\Models\User;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryModel extends Category
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
        return "pin";
    }

    public function image(): HasMany
    {
        return $this->hasMany(ImageModel::class, "category_uid", "uid")
            ->where("is_show", "=", 1)
            ->limit(10);
    }
}
