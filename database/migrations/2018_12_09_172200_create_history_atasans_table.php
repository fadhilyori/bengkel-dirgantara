<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryAtasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_atasans', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai')->nullable();
            $table->unsignedInteger('pegawai_id');
            $table->unsignedInteger('atasan_id');
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
        Schema::dropIfExists('history_atasans');
    }
}
