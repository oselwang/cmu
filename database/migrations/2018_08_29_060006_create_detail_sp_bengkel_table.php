<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailSpBengkelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_sp_bengkel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_sp_id')->unsigned()->nullable();
            $table->integer('tipe_sp_id')->unsigned()->nullable();
            $table->string('code')->unique();
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->integer('stock');
            $table->string('nama');
            $table->string('status');

            $table->foreign('kategori_sp_id')->on('kategori_sp_bengkel')->references('id')->onDelete('cascade');
            $table->foreign('tipe_sp_id')->on('tipe_sp_bengkel')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('detail_sp_bengkel');
    }
}
