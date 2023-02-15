<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id();
            $table->string('judulProduk');
            $table->string('deskripsiBarang');
            $table->bigInteger('harga');
            $table->string('gambar');
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
        //
    }
};
