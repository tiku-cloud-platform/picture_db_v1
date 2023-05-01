<?php
declare(strict_types=1);

namespace App\Logic\User\Repository;

use App\Models\User\ImageItemModel;
use App\Models\User\ImageModel;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ImageRepository implements UserRepositoryInterface
{

    public function repositorySelect(Closure $closure, int $perSize, array $searchFields = []): array
    {
        $items = (new ImageModel())::query()
            ->with(["author:uid,qr_url"])
            ->with(["user:uid,nickname,avatar_url"])
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
        Db::beginTransaction();
        try {
            $imageModel = ImageModel::query()->create($insertInfo["image"]);
            $imageItemModel = DB::table("image_item")->insert($insertInfo["image_item"]);
            if (!empty($imageModel->getKey()) && $imageItemModel) {
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Throwable $throwable) {
           Log::error($throwable->getMessage());
            DB::rollBack();
            return false;
        }
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
