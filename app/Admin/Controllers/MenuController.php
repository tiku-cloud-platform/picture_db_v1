<?php
declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Library\SnowFlakeId;
use App\Models\Admin\Menu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class MenuController extends AdminController
{
    protected $title = "菜单管理";

    public function grid(): Grid
    {
        $grid = new Grid(new Menu());
        $grid->paginate(20);
        $grid->model()->orderByDesc("id");
        $grid->disableFilter();

        $grid->column("uid", "数据编号")->copyable();
        $grid->column("title", "菜单名称");
        $grid->column("remark", "菜单描述");
        $grid->column("cover", "图片封面")->lightbox(['width' => 50, 'height' => 50]);
        $grid->column("orders", "显示顺序");
        $grid->column("navigate", "跳转地址");
        $grid->column('is_show', "上架状态")->display(function ($is_show) {
            if ($is_show == 1) {
                return "<span style='color:#059B50'>上架</span>";
            }
            return "<span style='color:#E70F0FFF'>下架</span>";
        });
        $grid->column('state', "开发状态")->display(function ($is_show) {
            if ($is_show == 1) {
                return "<span style='color:#059B50'>运行中</span>";
            }
            return "<span style='color:#E70F0FFF'>开发中</span>";
        });
        $grid->column("created_at", "创建时间");
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    public function form(): Form
    {
        $form = new Form(new Menu());
        $form->hidden("uid", "图片编号")->default(SnowFlakeId::getId());
        $form->text("title", "菜单名称")->rules('required|max:20')->help("推荐长度不超过4个中文汉字");
        $form->text("remark", "菜单描述")->rules('sometimes|max:20');
        $form->text("navigate", "跳转地址");
        $form->hidden("url", "相册地址")->default(env("QINIU_URL"));
        $form->number("orders", "显示权重")->default(0)->min(0)->max(999)->help("值越大，权重越高。最大值999。");
        $form->radio("is_show", "上架状态")->options([1 => "上架", 2 => "下架"])->default(1);
        $form->radio("state", "开发状态")->options([1 => "运行中", 2 => "开发中"])->default(2);
        $form->image("path", "菜单图标")->uniqueName()->required();

        return $form;
    }
}
