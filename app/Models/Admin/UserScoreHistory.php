<?php
declare(strict_types=1);

namespace App\Models\Admin;

use App\Models\UserScoreHistory as ScoreHistoryModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserScoreHistory extends ScoreHistoryModel
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_uid", "uid");
    }
}
