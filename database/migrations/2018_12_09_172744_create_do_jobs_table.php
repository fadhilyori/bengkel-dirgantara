<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('do_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bill_of_service');
            $table->string('price');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->dateTime('start')->nullable();
            $table->dateTime('finish')->nullable();
            $table->unsignedInteger('job_id');
            $table->unsignedInteger('pegawai_id');
            $table->unsignedInteger('parts_id');
            $table->unsignedInteger('job_pause_id');
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
        Schema::dropIfExists('do_jobs');
    }
}
