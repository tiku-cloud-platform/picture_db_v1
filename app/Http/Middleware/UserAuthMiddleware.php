<?php

namespace App\Http\Middleware;

use App\Library\RedisClient;
use App\Library\Response;
use Closure;
use Illuminate\Http\Request;

class UserAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $authorization = $request->header("Authorization", "");
        if (empty($authorization)) {
            return Response::error([], 101, "请登录", 401);
        }
        $authorization = trim(str_replace("Bearer", "", $authorization));
        if (empty($authorization)) {
            return Response::error([], 101, "请登录", 401);
        }
        $userInfo = RedisClient::client()->get($authorization);
        if (empty($userInfo)) {
            return Response::error([], 101, "请登录", 401);
        }
        // TODO 验证是否登录是登录时的同一台设备

        return $next($request);
    }
}
