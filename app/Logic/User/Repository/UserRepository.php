<?php
declare(strict_types=1);

namespace App\Logic\User\Repository;

use App\Library\SnowFlakeId;
use App\Models\User\UserModel;
use App\Models\User\UserScoreHistory;
use Closure;
use Illuminate\Support\Facades\Log;

class UserRepository implements UserRepositoryInterface
{

    public function repositorySelect(Closure $closure, int $perSize, array $searchFields = []): array
    {
        return [];
    }

    public function repositoryCreate(array $insertInfo): bool
    {
        $userModel = (new UserModel())::query()->create($insertInfo);
        try {
            UserScoreHistory::query()->create([
                "uid"      => SnowFlakeId::getId(),
                "title"    => "新用户注册",
                "user_uid" => $insertInfo["uid"],
                "score"    => 300,
                "type"     => 1,
            ]);
        } catch (\Throwable $throwable) {
            Log::error(json_encode([
                "user_uid" => $insertInfo["uid"],
                "msg"      => $throwable->getMessage(),
            ], JSON_UNESCAPED_UNICODE));
        }
        return !empty($userModel->getKey());

    }

    public function repositoryFind(Closure $closure, array $searchFields = []): array
    {
        $bean = UserModel::query()->where($closure)->first($searchFields);

        return !empty($bean) ? $bean->toArray() : [];
    }

    public function repositoryUpdate(array $updateWhere, array $updateInfo): int
    {
        return UserModel::query()->where($updateWhere)->update($updateInfo);
    }

    public function repositoryWhereInDelete(array $deleteWhere, string $field): int
    {
        return 0;
    }

    public function repositoryDelete(array $deleteWhere): int
    {
        return 0;
    }
}
