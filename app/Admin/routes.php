<?php

use App\Admin\Controllers\BannerController;
use App\Admin\Controllers\DocumentController;
use App\Admin\Controllers\DocumentGroupController;
use App\Admin\Controllers\EmoGroupController;
use App\Admin\Controllers\EmoImageController;
use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\ImageCategoryController;
use App\Admin\Controllers\ImageController;
use App\Admin\Controllers\ImageSeriesController;
use App\Admin\Controllers\MenuController;
use App\Admin\Controllers\TemplateHistoryController;
use App\Admin\Controllers\UserChannelController;
use App\Admin\Controllers\UserController;
use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
//    'namespace'     => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as' => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', [HomeController::class, "index"])->name('home');
    $router->resource("image/series", ImageSeriesController::class);
    $router->resource("image/category", ImageCategoryController::class);
    $router->resource("image/list", ImageController::class);
    $router->resource("documents/group", DocumentGroupController::class);
    $router->resource("documents", DocumentController::class);
    $router->resource("user/list", UserController::class);
    $router->resource("template/history", TemplateHistoryController::class);
    $router->resource("banner", BannerController::class);
    $router->resource("emo/group", EmoGroupController::class);
    $router->resource("emo/list", EmoImageController::class);
    $router->resource("menu/list", MenuController::class);
    $router->resource("user/channel", UserChannelController::class);
});
