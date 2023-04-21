<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Library\Response;
use Illuminate\Http\JsonResponse;

class SourceController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::success();
    }
}
