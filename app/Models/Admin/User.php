<?php
declare(strict_types=1);

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends \App\Models\User
{
    public function channel(): BelongsTo
    {
        return $this->belongsTo(UserChannel::class, "channel_uid", "uid");
    }

//    public function author(): BelongsTo
//    {
//        return $this->belongsTo(Author::class, "uid", "user_uid");
//    }
}
