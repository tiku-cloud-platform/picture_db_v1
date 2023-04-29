<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AuthorPublishWallPaperValidate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "image_title"        => "required|string|max:20|min:6",
            "image_desc"         => "required|max:30|min:6",
            "image_list"         => "required|json",
            "image_device"       => ["required", Rule::in(0, 1, 2)],
            "image_score"        => "required|numeric|between:0,20",
            "image_series_uid"   => "required|exists:series,uid",
            "image_category_uid" => "required|exists:category,uid",
        ];
    }

    public function messages(): array
    {
        return [
            "image_title.required"        => "名称必填",
            "image_title.string"          => "名称必须是一个字符串",
            "image_title.max"             => "名称长度为6-20之间",
            "image_title.min"             => "名称长度为6-20之间",
            "image_desc.required"         => "描述不能为空",
            "image_desc.string"           => "描述必须是个字符串",
            "image_desc.max"              => "描述长度为6-30",
            "image_desc.min"              => "描述长度为6-30",
            "image_list.required"         => "图片列表不能为空",
            "image_list.json"             => "图片列表格式不正确",
            "image_device.required"       => "设备类型不能为空",
            "image_device.in"             => "设备类型不存在",
            "image_score.require"         => "积分必填",
            "image_score.numeric"         => "积分只能是数字",
            "image_score.between"         => "积分为0-20之间",
            "image_series_uid.required"   => "标签不能为空",
            "image_series_uid.exists"     => "标签不存在",
            "image_category_uid.required" => "系列不能为空",
            "image_category_uid.exists"   => "系列不存在",
        ];
    }
}
