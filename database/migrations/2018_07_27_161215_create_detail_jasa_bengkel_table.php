<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailJasaBengkelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_jasa_bengkel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipe_jasa_id')->unsigned();
            $table->string('deskripsi');
            $table->string('estimasi_jam');
            $table->string('estimasi_menit');
            $table->string('estimasi_detik');
            $table->integer('harga');
            $table->string('status');
            $table->timestamps();

            $table->foreign('tipe_jasa_id')->references('id')->on('tipe_jasa_bengkel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_jasa_bengkel');
    }
}
