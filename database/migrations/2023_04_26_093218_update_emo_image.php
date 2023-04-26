<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmoImage extends Migration
{
    public function up()
    {
        Schema::table('emo_image', function (Blueprint $table) {
            $table->string("url", 255);
            $table->string("path", 255);
        });
    }

    public function down()
    {
        Schema::table('emo_image', function (Blueprint $table) {
        });
    }
}
