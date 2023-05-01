<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AuthorPublishWallPaperValidate;
use App\Library\Response;
use App\Logic\User\Service\AuthorService;
use Illuminate\Http\JsonResponse;

class AuthorController extends Controller
{
    public function checkUpdateAvatar(): JsonResponse
    {
        return Response::success((new AuthorService())->serviceCheckoutUpdateAvatar());
    }

    public function publishWallPaper(AuthorPublishWallPaperValidate $validate): JsonResponse
    {
        $publishResult = (new AuthorService())->servicePublish(request()->all());
        if ($publishResult["code"] == 0) {
            return Response::success($publishResult);
        }
        return Response::error($publishResult);
    }
}
