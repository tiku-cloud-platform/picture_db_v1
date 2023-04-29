<?php
declare(strict_types = 1);

namespace App\Constant;

class CacheKey
{
    public static $scoreKey = "score:";

    public static $userInfoUpdateCount = "user:user:count";

    public static $sourceType = [
        "iOS",
        "Android",
        "PC网站",
        "手机网站",
        "微信公众号",
        "微信小程序",
        "抖音小程序",
    ];
}
