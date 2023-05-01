<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use App\Logic\User\Service\ImageCategoryService;
use Illuminate\Http\JsonResponse;

class ImageCategoryController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::success((new ImageCategoryService())->serviceAll(request()->all()));
    }
}
