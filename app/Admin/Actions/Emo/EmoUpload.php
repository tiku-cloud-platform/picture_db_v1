<?php

namespace App\Admin\Actions\Emo;

use App\Library\SnowFlakeId;
use Encore\Admin\Actions\Response;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use zgldh\QiniuStorage\QiniuStorage;

class EmoUpload extends RowAction
{
    public $name = '上传图片';

    public function handle(Model $model, Request $request): Response
    {
        $fileArray = $request->file("path");
        $imageArray = [];
        foreach ($fileArray as $value) {
            $disk = QiniuStorage::disk('qiniu');
            $fileName = md5($value->getClientOriginalName() . time() . rand()) . '.' . $value->getClientOriginalExtension();
            $bool = $disk->put($fileName, file_get_contents($value->getRealPath()));
            if ($bool) {
                $imageArray[] = [
                    "uid"        => SnowFlakeId::getId(),
                    "group_uid"  => $request->post("group_uid"),
                    "url"        => $request->post("url"),
                    "path"       => $fileName,
                    "title"      => $value->getClientOriginalName(),
                    "type"       => $value->getClientMimeType(),
                    "img_back"   => $request->post("url") . $fileName,
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ];
            }
        }
        if (DB::table("emo_image")->insert($imageArray)) {
            return $this->response()->success('上传成功')->refresh();
        }
        return $this->response->error("上传失败");
    }

    public function form()
    {
        $this->hidden("group_uid", "图片编号")->default($this->getRow()->getAttribute("uid"));
        $this->hidden("uid", "图片编号")->default(SnowFlakeId::getId());
        $this->hidden("url", "图片地址")->default(env("QINIU_URL"));
        $this->multipleImage("path", "图片图片")->sortable()->required();
    }

}
