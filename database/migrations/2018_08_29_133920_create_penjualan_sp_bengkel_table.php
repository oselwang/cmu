<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualanSpBengkelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_sp_bengkel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_bengkel_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('dealer_id')->unsigned();
            $table->integer('total_harga');
            $table->string('ref_no');
            $table->date('ref_date');
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('customer_bengkel_id')->references('id')->on('customer_bengkel');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dealer_id')->references('id')->on('dealer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_sp_bengkel');
    }
}
