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
        $Users = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'), // <---- check this
                'role_as' => 1,
        	],
            [
                'id' => 2,
                'name' => 'penjual',
                'email' => 'penjual@gmail.com',
                'password' => Hash::make('penjual'), // <---- check this
                'role_as' => 2,
        	],

        ];
        foreach ($Users as $key => $value) {
            DB::table('users')->insert([
                'id' => $value['id'],
                'name' => $value['name'],
                'email' => $value['email'],
                'password' => $value['password'],
                'role_as' => $value['role_as'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
