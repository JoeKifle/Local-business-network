<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagereplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messagereplays', function (Blueprint $table) {
            $table->increments('id');
            $table->string("reply_cont");
            $table->string("messages_id");
            $table->string("time");
            $table->string("status");
            $table->string("l_n_b_s_id");
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
        Schema::drop('messagereplays');
    }
}
