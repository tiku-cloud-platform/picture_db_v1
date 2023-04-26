<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\EmoGroupService;
use App\Models\User\EmoGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmoGroupController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::success((new EmoGroupService())->serviceSelect(request()->all()));
    }
}
