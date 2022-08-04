<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_province')->unsigned();
            $table->integer('id_city')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo');
            $table->mediumText('alamat');
            $table->longText('alamat_lengkap');
            $table->string('kode_pos');
            $table->mediumText('negara');
            $table->integer('nomor_hp')->unsigned();
            $table->longText('note');

            $table->timestamps();
            
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_province')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
