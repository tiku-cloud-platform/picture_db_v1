<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\MenuService;
use Illuminate\Http\JsonResponse;

class MenuController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::success((new MenuService())->serviceSelect(request()->all()));
    }
}
