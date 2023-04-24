<?php
declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Library\SnowFlakeId;
use App\Models\Admin\RelationLink;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class RelationLinkController extends AdminController
{
    protected $title = "站点友链";

    public function grid(): Grid
    {
        $grid = new Grid(new RelationLink());
        $grid->paginate(20);
        $grid->model()->orderByDesc("id");
        $grid->disableFilter();

        $grid->column("uid", "数据编号")->copyable();
        $grid->column("title", "站点名称");
        $grid->column("app_id", "应用AppID");
        $grid->column("cover", "图片封面")->lightbox(['width' => 50, 'height' => 50]);
        $grid->column("orders", "显示顺序");
        $grid->column("link_url", "跳转地址");
        $grid->column("params", "页面参数");
        $grid->column('is_show', "上架状态")->display(function ($is_show) {
            if ($is_show == 1) {
                return "<span style='color:#059B50'>上架</span>";
            }
            return "<span style='color:#E70F0FFF'>下架</span>";
        });
        $grid->column('type', "链接类型")->display(function ($is_show) {
            if ($is_show == 1) {
                return "<span style='color:#059B50'>微信小程序</span>";
            } elseif ($is_show == 2) {
                return "<span style='color:#0FAAE7FF'>网页端</span>";
            } elseif ($is_show == 3) {
                return "<span style='color:#0FE765FF'>APP</span>";
            } else {
                return "<span style='color:#E70F0FFF'>其他</span>";
            }
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
        $form = new Form(new RelationLink());
        $form->hidden("uid", "图片编号")->default(SnowFlakeId::getId());
        $form->text("title", "站点名称")->rules('required|max:20')->help("推荐长度不超过4个中文汉字");
        $form->text("link_url", "跳转地址");
        $form->text("params", "跳转参数");
        $form->text("app_id", "应用AppID")->help("如果是微信小程序，填写微信小程序的AppID");
        $form->hidden("url", "相册地址")->default(env("QINIU_URL"));
        $form->number("orders", "显示权重")->default(0)->min(0)->max(999)->help("值越大，权重越高。最大值999。");
        $form->radio("is_show", "上架状态")->options([1 => "上架", 2 => "下架"])->default(1);
        $form->radio("type", "链接类型")->options([1 => "微信小程序", 2 => "网页端", 3 => "APP"])->default(1);
        $form->image("path", "站点logo")->uniqueName()->required();

        return $form;
    }
}
