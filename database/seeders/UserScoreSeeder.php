<?php

namespace Database\Seeders;

use App\Library\SnowFlakeId;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserScoreSeeder extends Seeder
{
    public function run()
    {
        $userList = User::query()->get(["uid"]);
        foreach ($userList as $value) {
            DB::table("user_score_history")->insert([
                "uid"      => SnowFlakeId::getId(),
                "title"    => "注册积分",
                "user_uid" => $value->uid,
                "score"    => 300.00,
                "type"     => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
