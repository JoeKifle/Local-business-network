<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePHOTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_h_o_t_o_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photoname');
            $table->integer('LNBS_id');
            $table->integer('l_n_b_s_id');
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
        Schema::drop('p_h_o_t_o_s');
    }
}
