<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->integer('id_brand')->unsigned();
            $table->integer('ukuran')->unsigned();
            $table->integer('harga')->unsigned();
            $table->integer('berat')->unsigned();
            $table->integer('dimensi')->unsigned();
            $table->integer('bahan')->unsigned();
            $table->mediumText('warna')->nullable();
            $table->longText('Deskripsi')->nullable();
            $table->integer('stok')->unsigned();
            $table->string('slug',40)->nullable();
            $table->string('name',100)->nullable();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->foreign('id_brand')->references('id')->on('brand')->onDelete('cascade');
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
        Schema::dropIfExists('produk');
    }
}
