<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('total_prize');
            $table->string('discount');
            $table->string('tax');
            $table->string('bill_of_service');
            $table->dateTime('date');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('jobs_id');
            $table->unsignedInteger('kendaraan_id');
            $table->unsignedInteger('branch_id');
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
        Schema::dropIfExists('invoices');
    }
}
