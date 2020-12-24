<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('job_desc');
            $table->string('job_requirement');
            $table->string('job_experience');
            $table->string('l_n_b_s_id');
            $table->string('job_contact_phone');
            $table->string('job_contact_email');
            $table->string('job_contact_skype');
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
        Schema::drop('jobs');
    }
}
