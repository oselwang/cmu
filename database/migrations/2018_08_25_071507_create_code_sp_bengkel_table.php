<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeSpBengkelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_sp_bengkel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_sp_id')->unsigned()->nullable();
            $table->integer('tipe_sp_id')->unsigned()->nullable();
            $table->string('identifier')->unique();
            $table->string('subtitute')->nullable();
            $table->string('deskripsi');
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
        Schema::dropIfExists('code_sp_bengkel');
    }
}
