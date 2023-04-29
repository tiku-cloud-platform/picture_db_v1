<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Constant\CacheKey;
use App\Library\RedisClient;

class AuthorService extends BaseService implements UserServiceInterface
{

    public static function searchWhere(array $requestParams)
    {
        // TODO: Implement searchWhere() method.
    }

    public function serviceSelect(array $requestParams): array
    {
        // TODO: Implement serviceSelect() method.
    }

    public function serviceCreate(array $requestParams): array
    {
        // TODO: Implement serviceCreate() method.
    }

    public function serviceUpdate(array $requestParams): array
    {
        // TODO: Implement serviceUpdate() method.
    }

    public function serviceDelete(array $requestParams): int
    {
        // TODO: Implement serviceDelete() method.
    }

    public function serviceFind(array $requestParams): array
    {
        // TODO: Implement serviceFind() method.
    }

    public function serviceCheckoutUpdateAvatar(): array
    {
        $updateCount = RedisClient::client()->get(CacheKey::$userInfoUpdateCount . $this->getUserUid());
        if ($updateCount) {
            return ["is_update" => $updateCount, "msg" => "已更新头像"];
        }
        return ["is_update" => $updateCount, "msg" => "请更新头像和昵称"];
    }
}
