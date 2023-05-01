<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\SysConfigService;
use Illuminate\Http\JsonResponse;

class SysConfigController extends Controller
{
    public function show(): JsonResponse
    {
        return Response::success((new SysConfigService())->serviceFind(request()->all()));
    }
}
