<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Constant\CacheKey;
use App\Library\RedisClient;
use App\Library\SnowFlakeId;
use App\Library\UserJwt;
use App\Library\WeChatClient;
use EasyWeChat\Kernel\Exceptions\InvalidConfigException;
use Illuminate\Support\Facades\Redis;
use RedisException;

class LoginService
{
    /**
     * @throws InvalidConfigException
     * @throws RedisException
     */
    public function serviceLogin(string $code, array $requestParams): array
    {
        $loginInfo = WeChatClient::client()->auth->session($code);
        if (isset($loginInfo["openid"])) {
            $userService = new UserService();
            $userInfo = $userService->serviceFind(["openid" => $loginInfo["openid"]]);
            $uid = $userInfo["uid"] ?? SnowFlakeId::getId();
            $nickname = $userInfo["nickname"] ?? "用户" . mt_rand(100, 20000);
            $score = empty($userInfo["score"]) ? 300 : $userInfo["score"];
            $remark = empty($userInfo["remark"]) ? "这家伙很懒 什么都没留下" : $userInfo["remark"];
            $profession = $userInfo["profession"] ?? 0;
            if (empty($userInfo)) {
                $createUser = $userService->serviceCreate([
                    "uid"         => $uid,
                    "openid"      => $loginInfo["openid"],
                    "nickname"    => $nickname,
                    "score"       => $score,
                    "remark"      => $remark,
                    "channel_uid" => 0,//(int)$requestParams["channel_uid"] ?? 0,
                ]);
                if (!count($createUser)) return ["msg" => "信息记录失败"];
                RedisClient::client()->incrByFloat(CacheKey::$scoreKey . $uid, 300);
            } else {
                RedisClient::client()->set(CacheKey::$scoreKey . $uid, $userInfo["score"]);
            }
            $userCacheInfo = [
                "uid"        => $uid,
                "openid"     => $loginInfo["openid"],
                "nickname"   => $nickname,
                "mobile"     => empty($userInfo["mobile"]) ? "" : $userInfo["mobile"],
                "email"      => empty($userInfo["mobile"]) ? "" : $userInfo["mobile"],
                "avatar_url" => $userInfo["avatar_url"] ?? "https://img.wxcha.com/m00/50/12/81b6ba3f79a9565ec32bd6d596a99944.jpg",
                "score"      => $score,
                "remark"     => $remark,
                "profession" => $profession,
            ];
            $tokenKey = SnowFlakeId::getId();

            RedisClient::client()->set($tokenKey, json_encode($userCacheInfo), mt_rand(1000, 9999) . (86400 * 7));

            return ["token" => $tokenKey, "user" => $userCacheInfo];
        }
        return ["msg" => "登录失败"];
    }
}
