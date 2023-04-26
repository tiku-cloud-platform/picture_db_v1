<?php
declare(strict_types=1);

namespace App\Logic\User\Repository;

use App\Models\User\SourceItem;
use App\Models\User\UserScoreHistory;
use Closure;

class UserScoreHistoryRepository implements UserRepositoryInterface
{
    public function repositorySelect(Closure $closure, int $perSize, array $searchFields = []): array
    {
        $items = (new UserScoreHistory())::query()
            ->where($closure)
            ->orderByDesc("id")
            ->paginate($perSize, $searchFields);

        return [
            "items" => $items->items(),
            "total" => $items->total(),
            "page"  => $items->currentPage(),
            "size"  => $items->perPage(),
        ];
    }

    public function repositoryCreate(array $insertInfo): bool
    {
        $historyModel = UserScoreHistory::query()->create($insertInfo);
        return !empty($historyModel->getKey());
    }

    public function repositoryFind(Closure $closure, array $searchFields = []): array
    {
        $bean = (new SourceItem())::query()->where($closure)->first($searchFields);
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
