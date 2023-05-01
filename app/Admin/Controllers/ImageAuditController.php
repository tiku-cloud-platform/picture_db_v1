<?php
declare(strict_types = 1);

namespace App\Admin\Controllers;

use App\Admin\Actions\Image\ImageItemAudit;
use App\Models\Admin\ImageItem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid;

class ImageAuditController extends AdminController
{
    protected $title = "创作者审核";

    public function grid(): Grid
    {
        $grid = new Grid(new ImageItem());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->column(1 / 2, function ($filter) {
                $filter->like('title', "相册名称");
                $filter->equal('is_show', "上架状态")->radio([
                    1 => '上架',
                    2 => '下架',
                ]);
            });
            $filter->column(1 / 2, function ($filter) {
                $filter->between('created_at', "创建时间")->datetime();
            });
        });
        $grid->paginate(15);
        $grid->model()->where("is_show", "=", 2)->orderByDesc("id");

        $grid->column("user.nickname", "创作者");
        $grid->column("image.title", "相册名称");
        $grid->column("cover", "相册封面")->lightbox(['width' => 50, 'height' => 50]);
        $grid->column("download", "下载次数");
        $grid->column("collect", "收藏次数");
        $grid->column('is_show', "上架状态")->display(function ($is_show) {
            if ($is_show == 1) {
                return "<span style='color:#059B50'>上架</span>";
            }
            return "<span style='color:#E70F0FFF'>下架</span>";
        });
        $grid->column("created_at", "创建时间");
        $grid->disableExport();
        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableEdit();
            $actions->disableDelete();
            $actions->add(new ImageItemAudit());
        });
        return $grid;
    }
}
