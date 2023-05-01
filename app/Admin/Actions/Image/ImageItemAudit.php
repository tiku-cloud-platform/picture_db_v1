<?php

namespace App\Admin\Actions\Image;

use App\Models\Admin\ImageItem;
use Encore\Admin\Actions\Response;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ImageItemAudit extends RowAction
{
    public $name = '审核';

    public function handle(Model $model, Request $request): Response
    {
        $uid       = $request->get("uid");
        $remark    = $request->get("remark");
        $state     = $request->get("is_show");
        $updateRow = ImageItem::query()->where("uid", "=", $uid)->update([
            "remark" => $remark,
            "is_show" => $state,
        ]);
        if ($updateRow) {
            return $this->response()->success("审核成功")->refresh();
        }
        return $this->response()->error("审核失败");
    }

    public function form()
    {
        $this->hidden("uid", "数据编号")->default($this->getRow()->getAttribute("uid"));
        $this->textarea("remark", "审核描述")->default("审核通过")->required();
        $this->radio("is_show", "审核结果")->options([1 => "通过", 2 => "驳回"])->default(1);
    }
}
