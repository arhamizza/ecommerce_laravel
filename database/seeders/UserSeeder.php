<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\BasketProduct;
use Illuminate\Support\Facades\Hash; 
use Faker\Factory as Faker;
use DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'), // <---- check this
            'role_as' => 1,
        ]);
    }
}
