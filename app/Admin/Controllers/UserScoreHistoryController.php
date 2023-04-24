<?php
declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Models\Admin\UserScoreHistory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid;

class UserScoreHistoryController extends AdminController
{
    protected $title = "积分历史";

    public function grid(): Grid
    {
        $grid = new Grid(new UserScoreHistory());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->column(1 / 2, function ($filter) {
                $filter->like('user.nickname', "用户姓名");
                $filter->equal("type", "获取类型")->select(['未知', '增加', '减少']);
            });
            $filter->column(1 / 2, function ($filter) {
                $filter->between('score', "积分范围");
                $filter->between('created_at', "获取时间")->datetime();
            });
        });
        $grid->paginate(15);
        $grid->model()->orderByDesc("id");
        $grid->column("uid", "数据编号")->copyable();
        $grid->column("title", "获取名称")->copyable();
        $grid->column("user.nickname", "用户昵称");
        $grid->column("user.uid", "用户编号")->copyable();
        $grid->column("type", "获取类型")->display(function ($type) {
            if ($type == 1) {
                return "<span style='color:#0fe765'>增加</span>";
            }
            if ($type == 2) {
                return "<span style='color:#e30909'>减少</span>";
            }
            return "<span style='color:gray'>未知</span>";
        });
        $grid->column("score", "用户积分");
        $grid->column("created_at", "获取时间");
        $grid->batchActions(function ($batch) {
            $batch->disableDelete();
        });
        $grid->disableActions();
        $grid->disableCreateButton();

        return $grid;
    }
}
