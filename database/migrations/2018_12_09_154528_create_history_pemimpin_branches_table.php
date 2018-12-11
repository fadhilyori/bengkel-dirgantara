<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryPemimpinBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_pemimpin_branches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('pegawai_id');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
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
        Schema::dropIfExists('history_pemimpin_branches');
    }
}
