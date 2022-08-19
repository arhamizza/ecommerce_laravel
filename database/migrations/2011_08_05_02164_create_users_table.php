<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_name')->nullable();  
            $table->string('last_name')->nullable();  
            $table->string('telephone')->nullable();  
            $table->string('fax')->nullable();  
            $table->string('company')->nullable();  
            $table->string('address1')->nullable();  
            $table->string('address2')->nullable();  
            $table->string('city')->nullable();  
            $table->string('post_code')->nullable();  
            $table->string('country')->nullable();  
            $table->string('region')->nullable();  
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();           
            $table->string('password');
            $table->tinyInteger('role_as')->default('0'); //Add in UserTable before timestamps
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
