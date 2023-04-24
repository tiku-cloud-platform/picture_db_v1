<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Logic\User\Repository\UserScoreHistoryRepository;
use Closure;

class UserScoreHistoryService extends BaseService implements UserServiceInterface
{
    public static function searchWhere(array $requestParams): Closure
    {
        return function ($query) use ($requestParams) {
            extract($requestParams);
            $query->where("user_uid", "=", $requestParams["user_uid"]);
        };
    }

    public function serviceSelect(array $requestParams): array
    {
        $requestParams["user_uid"] = $this->getUserUid();
        return (new UserScoreHistoryRepository())->repositorySelect(
            self::searchWhere($requestParams),
            (int)($requestParams["size"] ?? 20),
            ["title", "created_at as in_time", "score", "type"]
        );
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
        return [];
    }
}
