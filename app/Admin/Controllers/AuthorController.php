<?php

declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Admin\Actions\Author\UserAuthorAction1;
use Encore\Admin\Grid;
use App\Models\Admin\Author;
use App\Admin\Actions\Author\Author;
use Encore\Admin\Controllers\AdminController;

class AuthorController extends AdminController
{
    protected $title = "作者管理";

    public function grid()
    {
        $grid = new Grid(new Author());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->column(1 / 2, function ($filter) {
                $filter->like('user.nickname', "用户昵称");
                $filter->equal("is_forbidden", "账号状态")->select([1 => "禁用", 2 => "启用"]);
            });
            $filter->column(1 / 2, function ($filter) {
                $filter->between('series_count', "作品数量");
            });
        });
        $grid->paginate(15);
        $grid->model()->orderByDesc("id");

        $grid->column("uid", "作者编号")->copyable();
        $grid->column("user.nickname", "用户昵称")->copyable();
        $grid->column("created_at", "注册时间");
        $grid->column("is_forbidden", "账号状态")->display(function ($is_forbidden) {
            if ($is_forbidden == 1) {
                return "<span style='color:blue'>封禁</span>";
            }
            if ($is_forbidden == 2) {
                return "<span style='color:#FFB6C1'>启用</span>";
            }
            return "<span style='color:gray'>未知</span>";
        });

        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableEdit();
            $actions->disableDelete();
            $actions->add(new Author());
        });
        $grid->disableCreateButton();

        return $grid;
    }
}
