<?php
declare(strict_types = 1);

namespace App\Logic\User\Service;

use App\Library\RedisClient;
use App\Library\UserJwt;
use function request;

class BaseService
{
    protected function getUserUid(): int
    {
        $authorization = request()->header("Authorization");
        $authorization = trim(str_replace("Bearer", "", $authorization));
        $userInfo = RedisClient::client()->get($authorization);
        return  (int)json_decode($userInfo, true)["uid"];
    }

    protected function getUserInfo(): array
    {
        $authorization = request()->header("Authorization");
        $authorization = trim(str_replace("Bearer", "", $authorization));
        return UserJwt::decodeJwt($authorization);
    }

    protected function updateUserInfo(array $userInfo)
    {
        $authorization = request()->header("Authorization");
        $authorization = trim(str_replace("Bearer", "", $authorization));
        return RedisClient::client()->set($authorization, json_encode($userInfo), (7*86400) + mt_rand(100,9999));
    }
}
