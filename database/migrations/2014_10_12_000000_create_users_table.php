<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('pegawai', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('name', 50);
            // $table->string('alamat', 50);
            // $table->string('no_telp', 191);
            // $table->date('tanggal_masuk');
            // $table->date('tanggal_keluar')->nullable();
            // $table->string('email', 50)->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password', 191);
            // $table->unsignedInteger('role_id');
            // $table->unsignedInteger('manajer_id')->nullable();
            // $table->unsignedInteger('branch_id');
            // $table->unsignedInteger('status_id');
            // $table->rememberToken();
            // $table->timestamps();
            $table->increments('id');
            $table->string('name');
            $table->string('email', 191)->unique();
            $table->string('password');
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
        Schema::dropIfExists('pegawai');
    }
}
