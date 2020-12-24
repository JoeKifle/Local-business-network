<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSMEAPPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_m_e__a_p_p_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appCat');
            $table->string('Name');
            $table->String('essay');
            $table->string('legalID');
            $table->string('business_letter');
            $table->string('status');
            $table->string('User_id');
            $table->string('phone');
            $table->string('user_fname');
            $table->string('motto');
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
        Schema::drop('s_m_e__a_p_p_s');
    }
}
