<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->string('last_name');
            $table->string('city');
            $table->string('job');
            $table->string('phone');
            $table->string('address');
            $table->string('owns_SME');
            $table->string('is_admin');
            $table->string('app_status');
            $table->string('SME_APPS_id');
            $table->string('SME_id');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
