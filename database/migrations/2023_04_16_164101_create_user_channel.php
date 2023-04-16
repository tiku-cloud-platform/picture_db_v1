<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChannel extends Migration
{
    public function up()
    {
        Schema::create('user_channel', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("uid", false, true)->unique();
            $table->string("title", 32);
            $table->string("qr_url", 255);
            $table->string("qr_path", 255);
            $table->tinyInteger("is_show", false, true)->default(2);
            $table->string("remark", 1000)->nullable();
            $table->dateTime("created_at");
            $table->dateTime("updated_at");
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_channel');
    }
}
