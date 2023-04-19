<?php
declare(strict_types=1);

namespace App\Admin\Controllers;

use App\Library\SnowFlakeId;
use App\Models\Admin\SourceCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class SourceCategoryController extends AdminController
{
    protected $title = "资源分类";

    public function grid(): Grid
    {
        $grid = new Grid(new SourceCategory());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->column(1 / 2, function ($filter) {
                $filter->like('title', "分类名称");
                $filter->equal('is_show', "上架状态")->select([
                    1 => '上架',
                    2 => '下架',
                ]);
            });
            $filter->column(1 / 2, function ($filter) {
                $filter->between('created_at', "创建时间")->datetime();
                $filter->equal('parent_uid', "资源分类")->select(SourceCategory::getList());
            });
        });
        $grid->paginate(20);
        $grid->model()->orderByDesc("id");

        $grid->column("parent.title", "上级分类");
        $grid->column("title", "分类名称");
        $grid->column("cover", "分类图标")->lightbox(['width' => 50, 'height' => 50]);
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
        $form = new Form(new SourceCategory());
        $form->select("parent_uid", "父级分类")->options(SourceCategory::getList());
        $form->hidden("uid", "分类编号")->default(SnowFlakeId::getId());
        $form->text("title", "分类名称")->rules('required|max:20');
        $form->hidden("url", "图片地址")->default(env("QINIU_URL"));
        $form->image("path", "分类图标")->uniqueName();
        $form->number("orders", "显示顺序")->default(0)->help("值越大，显示权重越高，最大值99999999");
        $form->radio("is_show", "上架状态")->options([
            1 => "上架",
            2 => "下架",
        ])->default(1);

        return $form;
    }
}
