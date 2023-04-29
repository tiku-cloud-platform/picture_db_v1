<?php
declare(strict_types=1);

namespace App\Library;

use Illuminate\Support\Facades\Redis;

class RedisClient
{
    public  static function client()
    {
       return Redis::connection()->client();
    }
}
