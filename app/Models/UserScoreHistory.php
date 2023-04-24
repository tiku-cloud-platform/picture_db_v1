<?php
declare(strict_types=1);

namespace App\Models;

class UserScoreHistory extends BaseModel
{
    protected $table = "user_score_history";

    protected $fillable = [
        "uid",
        "title",
        "user_uid",
        "score",
        "type"
    ];
}
