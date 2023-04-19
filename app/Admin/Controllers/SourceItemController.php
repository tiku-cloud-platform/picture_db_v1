<?php
declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Constant\CacheKey;
use App\Library\SnowFlakeId;
use App\Models\Admin\SourceItem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class SourceItemController extends AdminController
{
    protected $title = "资源导航";

    public function grid(): Grid
    {
        $grid = new Grid(new SourceItem());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->column(1 / 2, function ($filter) {
                $filter->like('title', "资源名称");
                $filter->equal('is_show', "上架状态")->select([
                    1 => '上架',
                    2 => '下架',
                ]);
            });
            $filter->column(1 / 2, function ($filter) {
                $filter->between('created_at', "创建时间")->datetime();
                $filter->equal('category_uid', "资源资源")->select(SourceItem::getCategoryList());
            });
        });
        $grid->paginate(20);
        $grid->model()->orderByDesc("id");

        $grid->column("parent.title", "上级资源");
        $grid->column("title", "资源名称");
        $grid->column("cover", "资源图标")->lightbox(['width' => 50, 'height' => 50]);
        $grid->column("order", "显示顺序");
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
        $form = new Form(new SourceItem());
        $form->select("source_type", "资源类型")->options(CacheKey::$sourceType);
        $form->select("category_uid", "资源分类")->options(SourceItem::getCategoryList());
        $form->hidden("uid", "资源编号")->default(SnowFlakeId::getId());
        $form->text("title", "资源名称")->rules('required|max:20');
        $form->hidden("url", "图片地址")->default(env("QINIU_URL"));
        $form->image("path", "资源图标")->uniqueName();
        $form->text("site_url", "资源地址")->help("可以输入网站地址，App下载地址等");
        $form->number("orders", "显示顺序")->default(0)->help("值越大，显示权重越高，最大值99999999");
        $form->radio("is_show", "上架状态")->options([
            1 => "上架",
            2 => "下架",
        ])->default(1);
        $form->UEditor('content', "文档内容")->options(['initialFrameHeight' => 400])->required();

        return $form;
    }
}
