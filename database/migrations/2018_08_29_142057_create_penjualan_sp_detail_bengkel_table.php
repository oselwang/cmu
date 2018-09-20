<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualanSpDetailBengkelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_sp_detail_bengkel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_sp_id')->unsigned();
            $table->integer('penjualan_sp_id')->unsigned();
            $table->integer('harga');
            $table->integer('subtotal');
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('penjualan_sp_id')->references('id')->on('penjualan_sp_bengkel');
            $table->foreign('detail_sp_id')->references('id')->on('detail_sp_bengkel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_sp_detail_bengkel');
    }
}
