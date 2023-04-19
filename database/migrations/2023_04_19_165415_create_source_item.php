<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourceItem extends Migration
{
    public function up()
    {
        Schema::create('source_item', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("uid", false, true)->unique();
            $table->bigInteger("category_uid", false, true)->index();
            $table->string("title", 32);
            $table->tinyInteger("is_show", false, true)->default(2);
            $table->integer("orders", false, true)->default(0);
            $table->string("url", 255)->nullable();
            $table->string("path", 255)->nullable();
            $table->tinyInteger("source_type", false, true)->default(0);
            $table->text("content");
            $table->string("site_url", 100)->nullable();
            $table->dateTime("created_at");
            $table->dateTime("updated_at");
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('source_item');
    }
}
