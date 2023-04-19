<?php
declare(strict_types=1);

namespace App\Models\User;

use Illuminate\Database\Eloquent\Relations\HasMany;

class SourceCategory extends \App\Models\SourceCategory
{
    public function children(): HasMany
    {
        return $this->hasMany(SourceCategory::class, "parent_uid", "uid")
            ->where("is_show", "=", 1)
            ->orderByDesc("orders");
    }
}
