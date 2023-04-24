<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\UserScoreHistoryService;
use Illuminate\Http\JsonResponse;

class UserScoreHistoryController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::success((new UserScoreHistoryService())->serviceSelect(request()->all()));
    }
}
