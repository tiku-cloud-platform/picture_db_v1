<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Constant\CacheKey;
use App\Library\RedisClient;
use App\Logic\User\Repository\SysConfigRepository;

class SysConfigService implements UserServiceInterface
{

    public static function searchWhere(array $requestParams)
    {
        return function ($query) use ($requestParams) {
            extract($requestParams);
            $query->where("key", "=", $requestParams["key"]);
        };
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
        $key = CacheKey::$sysConfig . $requestParams["key"];
        $cache = RedisClient::client()->get($key);
        if (!empty($cache)) {
            return ["val" => $cache];
        }
        $config = (new SysConfigRepository())->repositoryFind(self::searchWhere($requestParams), ["val"]);
        RedisClient::client()->set(CacheKey::$sysConfig . $requestParams["key"], $config["val"]);
        return $config;
    }
}
