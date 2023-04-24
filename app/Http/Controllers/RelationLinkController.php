<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\RelationLinkService;
use Illuminate\Http\JsonResponse;

class RelationLinkController
{
    public function index(): JsonResponse
    {
        return Response::success((new RelationLinkService())->serviceSelect(request()->all()));
    }
}
