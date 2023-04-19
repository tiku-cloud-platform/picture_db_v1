<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\SourceCategoryService;
use Illuminate\Http\JsonResponse;

class SourceCategoryController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::success((new SourceCategoryService())->serviceSelect(request()->all()));
    }
}
