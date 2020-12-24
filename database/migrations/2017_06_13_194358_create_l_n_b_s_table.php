<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLNBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_n_b_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LNB_name');
            $table->string('lnb_quote');
            $table->string('profile_pic');
            $table->string('wallpaper');
            $table->string('users_id');
            $table->string('rated_val');
            $table->string('category');
            $table->string('longitude');
            $table->string('latitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('l_n_b_s');
    }
}
