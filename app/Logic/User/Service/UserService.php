<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Constant\CacheKey;
use App\Library\RedisClient;
use App\Library\SnowFlakeId;
use App\Logic\User\Repository\UserRepository;
use App\Logic\User\Repository\UserScoreHistoryRepository;
use Closure;
use Illuminate\Support\Facades\Redis;
use RedisException;

class UserService extends BaseService implements UserServiceInterface
{

    public static function searchWhere(array $requestParams): Closure
    {
        return function ($query) use ($requestParams) {
            extract($requestParams);
            if (!empty($openid)) {
                $query->where("openid", "=", $openid);
            }
        };
    }

    public function serviceSelect(array $requestParams): array
    {
        return [];
    }

    public function serviceCreate(array $requestParams): array
    {
        if ((new UserRepository())->repositoryCreate($requestParams)) {
            return ["msg" => "创建成功"];
        }
        return [];
    }


    /**
     * @throws RedisException
     */
    public function serviceUpdate(array $requestParams): array
    {
        $uid = $this->getUserUid();
        $updateUser = (new UserRepository())->repositoryUpdate([
            ["uid", "=", $uid],
        ], [
            "nickname"   => $requestParams["nickname"],
            "mobile"     => $requestParams["mobile"] ?? "",
            "email"      => $requestParams["email"] ?? "",
            "avatar_url" => $requestParams["avatar_url"],
            "gender"     => $requestParams["gender"],
            "birthday"   => $requestParams["birthday"],
            "remark"     => $requestParams["remark"],
            "profession" => $requestParams["profession"],
            "name"       => $requestParams["name"],
        ]);
        if ($updateUser) {
            $score = RedisClient::client()->get(CacheKey::$scoreKey . $uid);
            $userInfo = [
                "uid"        => $uid,
                "nickname"   => $requestParams["nickname"],
                "mobile"     => $requestParams["mobile"] ?? "",
                "email"      => $requestParams["email"] ?? "",
                "avatar_url" => $requestParams["avatar_url"],
                "gender"     => $requestParams["gender"],
                "birthday"   => $requestParams["birthday"],
                "remark"     => $requestParams["remark"],
                "profession" => $requestParams["profession"],
                "name"       => $requestParams["name"],
                "score"      => $score + 20,
            ];
            // 更新成功之后，同步缓存信息
            $loginToken = $this->updateUserInfo($userInfo);
            $updateCount = RedisClient::client()->get(CacheKey::$userInfoUpdateCount . $uid);
            if ($updateCount < 3) {// 更新超过3次，就不需要更新增加更新积分历史
                // 如果没有更新头像不增加积分
                if (basename($requestParams["avatar_url"]) != "81b6ba3f79a9565ec32bd6d596a99944.jpg") {
                    RedisClient::client()->incrByFloat(CacheKey::$scoreKey . $uid, 20);
                    (new UserRepository())->repositoryUpdate([
                        ["uid", "=", $this->getUserUid()],
                    ], ["score" => $score + 20]);
                    (new UserScoreHistoryRepository())->repositoryCreate([
                        "uid"      => SnowFlakeId::getId(),
                        "title"    => "更新个人资料",
                        "user_uid" => $this->getUserUid(),
                        "score"    => 10,
                        "type"     => 1,
                    ]);
                    RedisClient::client()->incr(CacheKey::$userInfoUpdateCount . $uid);
                }
            }
            return ["row" => 1, "token" => $loginToken, "user" => $userInfo, "rows" => $updateCount];
        }
        return ["row" => 0];
    }

    public function serviceDelete(array $requestParams): int
    {
        return 0;
    }

    public function serviceFindByOpenId(array $requestParams): array
    {
        return (new UserRepository())->repositoryFind(self::searchWhere($requestParams), [
            "uid", "nickname", "avatar_url",
        ]);
    }

    public function serviceUserInfo(): array
    {
        return (new UserRepository())->repositoryFind(function ($query) {
            $query->where("uid", "=", $this->getUserUid());
        }, [
            "uid",
            "nickname",
            "mobile",
            "email",
            "avatar_url",
            "gender",
            "age",
            "birthday",
            "remark",
            "profession",
            "score",
            "invite_count",
            "production_count",
            "name",
        ]);
    }

    public function serviceFind(array $requestParams): array
    {
        return (new UserRepository())->repositoryFind(self::searchWhere($requestParams), [
            "uid",
            "openid",
            "nickname",
            "mobile",
            "email",
            "avatar_url",
            "gender",
            "age",
            "birthday",
            "remark",
            "profession",
            "score",
            "invite_count",
            "production_count",
            "name",
        ]);
    }
}
