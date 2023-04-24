<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Logic\User\Repository\RelationLinkRepository;
use Closure;

class RelationLinkService
{
    public static function searchWhere(array $requestParams): Closure
    {
        return function ($query) use ($requestParams) {
            extract($requestParams);
            $query->where("is_show", "=", 1);
            if (!empty($title)) {
                $query->where("title", "like", "%{$title}%");
            }
        };
    }

    public function serviceSelect(array $requestParams): array
    {
        return (new RelationLinkRepository())->repositorySelect(
            self::searchWhere($requestParams),
            (int)($requestParams["size"] ?? 20),
            ["uid", "title", "path", "url", "type", "app_id", "link_url", "params"]
        );
    }
}
