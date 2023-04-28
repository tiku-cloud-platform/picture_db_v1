<?php

declare(strict_types=1);

namespace App\Admin\Actions\Author;

use App\Models\Admin\Author;
use Illuminate\Http\Request;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class UserAuthorAction extends RowAction
{
    public $name = "作者信息";

    public function handle(Model $model, Request $request)
    {
        $uid = $request->post("uid", "");
        $isForbidden = $request->post("is_forbidden", 2);
        if (!empty($uid) && !empty($isForbidden)) {
            if (Author::query()->where("uid", "=", $uid)->update(["is_forbidden" => $isForbidden])) {
                return  $this->response()->success("更新成功")->refresh();
            }
            return $this->response()->error("更新失败");
        }
        return $this->response()->error("参数错误");
    }

    public function form()
    {
        $userUid = $this->getRow()->getAttribute("uid");
        $author = Author::query()->where("user_uid", "=", $userUid)->first(["series_count", "created_at", "is_forbidden", "uid"]);
        var_dump($author);
        $this->text("uid", "作者编号")->default($author->uid)->readonly();
        $this->text("created_at", "认证时间")->default($author->created_at)->readonly();
        $this->text("series_count", "作品数量")->default($author->series_count)->readonly();
        $this->radio('is_forbidden', '账号状态')->default($author->is_forbidden)->options([1 => "禁用", 2 => "正常"])->required();
    }
}
