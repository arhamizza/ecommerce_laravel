<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('nama');
            $table->string('slug');
            $table->longText('description');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('popular')->default('0');
            $table->string('meta_title');
            $table->string('meta_descrip');
            $table->string('meta_keyword');
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
        Schema::dropIfExists('kategori');
    }
}
