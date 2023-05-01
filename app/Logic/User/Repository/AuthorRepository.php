<?php
declare(strict_types=1);

namespace App\Logic\User\Repository;

use App\Models\User\AuthorModel;
use Closure;

class AuthorRepository implements UserRepositoryInterface
{

    public function repositorySelect(Closure $closure, int $perSize, array $searchFields = []): array
    {
        // TODO: Implement repositorySelect() method.
    }

    public function repositoryCreate(array $insertInfo): bool
    {
       $authorModel = AuthorModel::query()->create($insertInfo);
       if (!empty($authorModel->getKey())) {
           return true;
       }
       return false;
    }

    public function repositoryFind(Closure $closure, array $searchFields = []): array
    {
        $authorInfo = AuthorModel::query()->where($closure)->first($searchFields);
        if (!empty($authorInfo)) {
            return $authorInfo->toArray();
        }

        return [];
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
