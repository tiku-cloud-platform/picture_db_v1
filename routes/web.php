<?php

use App\Models\EmoImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $count = DB::table("emo_image")->count();
    for ($i=0; $i < $count; $i++) { 
        $image = EmoImage::query()->where("path", "=", "")->first(["img_back", "id"]);
        $image = $image->toArray();
        var_dump(basename($image["img_back"]));
        var_dump("文件写入结果", file_put_contents(__DIR__ . "/../image/" . basename($image["img_back"]), file_get_contents($image["img_back"])));
        EmoImage::query()->where("id", "=", $image["id"])->update([
            "path" => basename($image["img_back"]),
            "url" => env("QINIU_URL", "")
        ]);
    }
});
