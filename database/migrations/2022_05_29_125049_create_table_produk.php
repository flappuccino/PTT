<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_produk', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->string('nama_produk')->nullable(); 
            $table->integer('harga'); 
            $table->integer('jml_unit'); 
            $table->string('tipe_kamar'); 
            $table->string('gambar'); 
            $table->string('deskripsi'); 
            $table->integer('id_user'); 
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
        Schema::dropIfExists('table_produk');
    }
}
