<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUser extends Migration
{
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->tinyInteger("is_update_info", false, true)->default(2);
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
}
