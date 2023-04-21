<?php
declare(strict_types = 1);

namespace App\Logic\User\Repository;

use App\Models\User\ImageItemModel;
use Closure;

class ImageItemRepository implements UserRepositoryInterface
{

    public function repositorySelect(Closure $closure, int $perSize, array $searchFields = []): array
    {
        $items = (new ImageItemModel())::query()
            ->with(["author:uid,qr_url"])
            ->with(["user:uid,nickname,avatar_url"])
            ->where($closure)
            ->orderByDesc("id")
            ->paginate($perSize, $searchFields);

        return [
            "items" => $items->items(),
            "total" => $items->total(),
            "page" => $items->currentPage(),
            "size" => $items->perPage(),
        ];
    }

    public function repositoryCreate(array $insertInfo): bool
    {
        // TODO: Implement repositoryCreate() method.
    }

    public function repositoryFind(Closure $closure, array $searchFields = []): array
    {
        $bean = (new ImageItemModel())::query()->where($closure)->first($searchFields);

        return !empty($bean) ? $bean->toArray() : [];
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
