<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBengkelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_bengkel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dealer_id')->unsigned();
            $table->integer('warna_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->integer('jenis_buku_id')->unsigned()->nullable();
            $table->integer('kota_id')->unsigned()->nullable();
            $table->integer('kecamatan_id')->unsigned()->nullable();
            $table->integer('kelurahan_id')->unsigned()->nullable();
            $table->string('no_rangka');
            $table->string('no_polisi');
            $table->string('no_mesin');
            $table->integer('tahun')->nullable();
            $table->string('tipe_konsumen');
            $table->string('no_ksg')->nullable();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->string('gender');
            $table->date('tanggal_lahir')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('cellphone_number')->nullable();
            $table->string('id_number')->nullable();
            $table->date('stnk_expiry_date');
            $table->timestamps();

            $table->foreign('dealer_id')->references('id')->on('dealer')->onDelete('cascade');
            $table->foreign('warna_id')->references('id')->on('warna')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('unit')->onDelete('cascade');
            $table->foreign('jenis_buku_id')->references('id')->on('jenis_buku')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('kota')->onDelete('cascade');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan')->onDelete('cascade');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_bengkel');
    }
}
