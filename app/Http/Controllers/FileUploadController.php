<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Library\Response;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use zgldh\QiniuStorage\QiniuStorage;

class FileUploadController
{
    public function upload(Request $request): JsonResponse
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $disk = QiniuStorage::disk('qiniu');
                // 这里固定图片格式，是因为七牛云的CDN瘦身只支持jpg和png两种格式
                $fileName = md5($file->getClientOriginalName() . time() . rand()) . '.png';
                $bool = $disk->put($fileName, file_get_contents($file->getRealPath()));
                if ($bool) {
                    $path = $disk->downloadUrl($fileName);
                    return Response::success(["url" => $path], 100, "上传成功");
                }
                return Response::error([], 101, "上传错误");
            }
            return Response::error([], 101, "上传文件不能为空");
        } else {
            return Response::error([], 101, "上传方式错误");
        }
    }

    /**
     * 为了适配图鸟UI上传图片组件，特此单独创建上传方法
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function uploadAuthor(Request $request): JsonResponse
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $disk = QiniuStorage::disk('qiniu');
                $fileName = md5($file->getClientOriginalName() . time() . rand()) . '.png';
                $bool = $disk->put($fileName, file_get_contents($file->getRealPath()));
                if ($bool) {
                    $path = $disk->downloadUrl($fileName);
                    return Response::success(["url" => $path], 100, "上传成功");
                }
                return Response::error([], 101, "上传错误");
            }
            return Response::error([], 101, "上传文件不能为空");
        } else {
            return Response::error([], 101, "上传方式错误");
        }
    }
}
