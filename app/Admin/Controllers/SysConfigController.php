<?php
declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Constant\CacheKey;
use App\Library\RedisClient;
use App\Library\SnowFlakeId;
use App\Models\Admin\SysConfig;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class SysConfigController extends AdminController
{
    protected $title = "系统配置";

    public function grid(): Grid
    {
        $grid = new Grid(new SysConfig());
        $grid->paginate(20);
        $grid->model()->orderByDesc("id");
        $grid->disableFilter();

        $grid->column("uid", "数据编号")->copyable();
        $grid->column("title", "配置名称");
        $grid->column("key", "配置key");
        $grid->column("val", "配置值");
        $grid->column("describe", "配置描述");
        $grid->column("created_at", "创建时间");
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    public function form(): Form
    {
        $form = new Form(new SysConfig());
        $form->hidden("uid", "数据编号")->default(SnowFlakeId::getId());
        $form->text("title", "配置名称")->rules('required|max:20');
        $form->text("key", "配置key")->required();
        $form->textarea("val", "配置值")->required();
        $form->text("describe", "配置描述")->rules('sometimes|max:20');
        $form->saved(function (Form $form) {
            RedisClient::client()->set(CacheKey::$sysConfig . $form->key, $form->val);
        });

        return $form;
    }
}
