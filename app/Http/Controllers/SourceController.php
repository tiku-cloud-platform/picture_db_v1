<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\SourceService;
use Illuminate\Http\JsonResponse;

class SourceController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::success((new SourceService())->serviceSelect(request()->all()));
    }

    public function show(): JsonResponse
    {
        return Response::success((new SourceService())->serviceFind(request()->all()));
    }
}
