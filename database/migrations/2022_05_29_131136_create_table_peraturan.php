<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePeraturan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_peraturan', function (Blueprint $table) {
            $table->increments('id_peraturan');
            $table->string('peraturan1'); 
            $table->string('peraturan2'); 
            $table->string('peraturan3'); 
            $table->string('peraturan4'); 
            $table->string('peraturan5'); 
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
        Schema::dropIfExists('table_peraturan');
    }
}
