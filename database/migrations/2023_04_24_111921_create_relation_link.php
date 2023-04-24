<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationLink extends Migration
{

    public function up()
    {
        Schema::create('relation_link', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("uid", false, true)->unique();
            $table->string("title", 32);
            $table->string("path", 255);
            $table->string("url", 255);
            $table->bigInteger("orders", false, true)->default(0);
            $table->tinyInteger("is_show", false, true)->default(2);
            $table->tinyInteger("type", false, true)->default(0)
                ->comment("1微信小程序2网页3APP");
            $table->string("link_url", 1000)->nullable();
            $table->string("params", 1000)->nullable();
            $table->string("app_id", 1000)->nullable();
            $table->dateTime("created_at");
            $table->dateTime("updated_at");
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('relation_link');
    }
}
