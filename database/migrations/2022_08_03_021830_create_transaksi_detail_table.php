<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_produk')->unsigned();
            $table->integer('id_transaksi')->unsigned();
            $table->string('resi',100)->nullable();
            $table->mediumText('status_transaksi',100);
            $table->integer('harga')->unsigned();
            $table->mediumText('jenis_paket')->nullable();
            $table->mediumText('kurir')->nullable();
            $table->integer('kode_transaksi')->unsigned();
            $table->decimal('ongkos_kirim',13,2)->nullable();


            $table->timestamps();

            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id')->on('transaksi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_detail');
    }
}
