<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->increments('id');
            $table->bigInteger('cate_id');
            $table->string('nama');
            $table->string('slug');
            $table->mediumText('small_description');
            $table->longText('description');
            $table->string('original_price');
            $table->string('selling_price');
            $table->string('image');
            $table->string('qty');
            $table->string('tax');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->mediumText('meta_title');
            $table->mediumText('meta_keyword');
            $table->mediumText('meta_description');
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}