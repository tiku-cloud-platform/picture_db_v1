<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Logic\User\Repository\MenuRepository;
use Closure;

class MenuService implements UserServiceInterface
{

    public static function searchWhere(array $requestParams): Closure
    {
        return function ($query) use ($requestParams) {
            extract($requestParams);
            $query->where("is_show", "=", 1);
        };
    }

    public function serviceSelect(array $requestParams): array
    {
        return  (new MenuRepository())->repositorySelect(self::searchWhere($requestParams),
            (int)($requestParams["size"] ?? 20),
            ["title", "url", "path", "navigate", "state"]);
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
}
