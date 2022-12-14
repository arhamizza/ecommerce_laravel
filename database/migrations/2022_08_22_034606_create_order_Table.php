<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            // $table->string('fname');
            // $table->string('lname');
            // $table->string('email');
            // $table->string('telephone');
            // $table->string('address1');
            // $table->string('address2');
            // $table->integer('postcode');
            // $table->string('provinsi');
            // $table->string('kota');
            // $table->string('kecamatan');
            // $table->string('kelurahan');
            $table->string('ongkir');
            $table->integer('total_price');
            $table->string('payment_mode');
            $table->string('payment_id')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('message')->nullable();
            $table->string('tracking_no');
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
        Schema::dropIfExists('order');
    }
}
