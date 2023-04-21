<?php
declare(strict_types = 1);

namespace App\Logic\User\Service;

use App\Logic\User\Repository\SourceRepository;
use Closure;

class SourceService implements UserServiceInterface
{

    public static function searchWhere(array $requestParams): Closure
    {
        return function ($query) use ($requestParams) {
            extract($requestParams);
            $query->where("is_show", "=", 1);
            $query->where("category_uid", "=", $category_uid);
        };
    }

    public function serviceSelect(array $requestParams): array
    {
        return (new SourceRepository())->repositorySelect(
            self::searchWhere($requestParams),
            (int)($requestParams["size"] ?? 20),
            ["uid", "title", "path", "url"]
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
        return (new SourceRepository())->repositoryFind(function ($query) use ($requestParams) {
            $query->where("uid", "=", $requestParams["uid"]);
        }, ["site_url", "content", "source_type"]);
    }
}
