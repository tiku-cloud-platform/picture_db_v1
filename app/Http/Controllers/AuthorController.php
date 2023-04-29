<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\AuthorService;
use Illuminate\Http\JsonResponse;

class AuthorController extends Controller
{
    public function checkUpdateAvatar(): JsonResponse
    {
        return Response::success((new AuthorService())->serviceCheckoutUpdateAvatar());
    }
}
