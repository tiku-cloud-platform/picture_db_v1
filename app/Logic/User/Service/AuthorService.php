<?php
declare(strict_types = 1);

namespace App\Logic\User\Service;

use App\Constant\CacheKey;
use App\Library\RedisClient;
use App\Library\SnowFlakeId;
use App\Logic\User\Repository\AuthorRepository;
use App\Logic\User\Repository\ImageRepository;
use Closure;

class AuthorService extends BaseService implements UserServiceInterface
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
        // TODO: Implement serviceSelect() method.
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
        return (new AuthorRepository())->repositoryFind(self::searchWhere($requestParams), ["uid", "is_forbidden"]);
    }

    public function servicePublish(array $requestParams): array
    {
        $userId     = $this->getUserUid();
        $authorId   = SnowFlakeId::getId();
        $authorInfo = $this->serviceFind(["user_uid" => $userId]);
        if (count($authorInfo) == 0) {
            $authorInfo   = [
                "uid" => $authorId,
                "user_uid" => $userId,
                "is_forbidden" => 2,
                "series_count" => 0,
                "qr_url" => "https://img.wxcha.com/m00/50/12/81b6ba3f79a9565ec32bd6d596a99944.jpg",
            ];
            $createAuthor = (new AuthorRepository())->repositoryCreate($authorInfo);
            if (!$createAuthor) {
                return ["code" => 1, "msg" => "系统异常"];
            }
        }
        if ($authorInfo["is_forbidden"] == 1) {
            return ["code" => 1, "msg" => "发布权限已被禁用"];
        }
        $authorId   = $authorInfo["uid"];
        $imageArray = json_decode($requestParams["image_list"], true);
        $imageList  = [];
        $imageUid   = SnowFlakeId::getId();
        foreach ($imageArray as $value) {
            $pathInfo    = pathinfo($value);
            $imageList[] = [
                "uid" => SnowFlakeId::getId(),
                "user_uid" => $userId,
                "author_uid" => $authorId,
                "image_uid" => $imageUid,
                "url" => $pathInfo["dirname"] . "/",
                "path" => $pathInfo["basename"],
                "download" => 0,
                "collect" => 0,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ];
        }
        $image = [
            "uid" => $imageUid,
            "user_uid" => $userId,
            "author_uid" => $authorId,
            "series_uid" => $requestParams["image_series_uid"],
            "category_uid" => $requestParams["image_category_uid"],
            "item_count" => count($imageArray),
            "url" => $imageList[0]["url"],
            "path" => $imageList[0]["path"],
            "title" => $requestParams["image_title"],
            "download" => 0,
            "collect" => 0,
            "is_show" => 2,
        ];
        if ((new ImageRepository())->repositoryCreate(["image" => $image, "image_item" => $imageList])) {
            return ["code" => 0, "msg" => "请等待审核"];
        }
        return ["code" => 1, "msg" => "发布失败"];
    }

    public function serviceCheckoutUpdateAvatar(): array
    {
        $updateCount = RedisClient::client()->get(CacheKey::$userInfoUpdateCount . $this->getUserUid());
        if ($updateCount) {
            return ["is_update" => $updateCount, "msg" => "已更新头像"];
        }
        return ["is_update" => $updateCount, "msg" => "请更新头像和昵称"];
    }
}
