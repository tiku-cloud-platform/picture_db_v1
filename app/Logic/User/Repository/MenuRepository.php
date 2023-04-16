<?php
declare(strict_types=1);

namespace App\Logic\User\Repository;

use App\Models\User\MenuModel;
use Closure;

class MenuRepository implements UserRepositoryInterface
{

    public function repositorySelect(Closure $closure, int $perSize, array $searchFields = []): array
    {
        $items = (new MenuModel())::query()
            ->where($closure)
            ->orderByDesc("orders")
            ->paginate($perSize, $searchFields);

        return [
            "items" => $items->items(),
            "page" => $items->currentPage(),
            "size" => $items->perPage(),
            "total" => $items->total(),
        ];
    }

    public function repositoryCreate(array $insertInfo): bool
    {
        // TODO: Implement repositoryCreate() method.
    }

    public function repositoryFind(Closure $closure, array $searchFields = []): array
    {
        // TODO: Implement repositoryFind() method.
    }

    public function repositoryUpdate(array $updateWhere, array $updateInfo): int
    {
        // TODO: Implement repositoryUpdate() method.
    }

    public function repositoryWhereInDelete(array $deleteWhere, string $field): int
    {
        // TODO: Implement repositoryWhereInDelete() method.
    }

    public function repositoryDelete(array $deleteWhere): int
    {
        // TODO: Implement repositoryDelete() method.
    }
}
