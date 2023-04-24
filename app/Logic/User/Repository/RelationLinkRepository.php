<?php
declare(strict_types=1);

namespace App\Logic\User\Repository;

use App\Models\User\RelationLink;
use Closure;

class RelationLinkRepository
{
    public function repositorySelect(Closure $closure, int $perSize, array $searchFields = []): array
    {
        $items = (new RelationLink())::query()
            ->where($closure)
            ->orderByDesc("orders")
            ->paginate($perSize, $searchFields);

        return [
            "items" => $items->items(),
            "total" => $items->total(),
            "page" => $items->currentPage(),
            "size" => $items->perPage(),
        ];
    }
}
