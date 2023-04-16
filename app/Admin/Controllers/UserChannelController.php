<?php
declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Library\SnowFlakeId;
use App\Models\Admin\UserChannel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class UserChannelController extends AdminController
{
    protected $title = "用户渠道";

    public function grid(): Grid
    {
        $grid = new Grid(new UserChannel());
        $grid->paginate(20);
        $grid->model()->orderByDesc("id");
        $grid->disableFilter();

        $grid->column("uid", "数据编号")->copyable();
        $grid->column("title", "渠道名称");
        $grid->column("remark", "菜单描述");
        $grid->column("cover", "图片封面")->lightbox(['width' => 50, 'height' => 50]);
        $grid->column("total", "注册人数");
        $grid->column('is_show', "上架状态")->display(function ($is_show) {
            if ($is_show == 1) {
                return "<span style='color:#059B50'>上架</span>";
            }
            return "<span style='color:#E70F0FFF'>下架</span>";
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
        $form = new Form(new UserChannel());
        $form->hidden("uid", "图片编号")->default(SnowFlakeId::getId());
        $form->text("title", "渠道名称")->rules('required|max:20');
        $form->textarea("remark", "渠道描述")->rules('required|max:1000')->help("最大1000个字符。");
        $form->hidden("qr_url", "相册地址")->default(env("QINIU_URL"));
        $form->radio("is_show", "上架状态")->options([1 => "上架", 2 => "下架"])->default(1);
        $form->image("qr_path", "菜单图标")->uniqueName()->required();

        return $form;
    }
}
