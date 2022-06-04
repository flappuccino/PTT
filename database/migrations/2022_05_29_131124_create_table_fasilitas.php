<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFasilitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_fasilitas', function (Blueprint $table) {
            $table->increments('id_fasilitas');
            $table->string('nama_fasilitas'); 
            $table->string('internet'); 
            $table->string('area_parkir'); 
            $table->string('dapur'); 
            $table->string('rooftop'); 
            $table->integer('id_produk'); 
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
        Schema::dropIfExists('table_fasilitas');
    }
}
