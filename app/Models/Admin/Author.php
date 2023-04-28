<?php

declare(strict_types=1);

namespace App\Models\Admin;

use App\Models\Author as ModelsAuthor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Author extends ModelsAuthor
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_uid", "uid");
    }
}
