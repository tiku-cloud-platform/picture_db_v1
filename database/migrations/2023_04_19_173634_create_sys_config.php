<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysConfig extends Migration
{

    public function up()
    {
        Schema::create('sys_config', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("uid", false, true)->unique();
            $table->string("title", 32);
            $table->string("key", 32);
            $table->text("val");
            $table->text("describe")->nullable();
            $table->dateTime("created_at");
            $table->dateTime("updated_at");
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sys_config');
    }
}
