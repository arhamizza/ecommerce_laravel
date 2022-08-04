<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\BasketProduct;
use Faker\Factory as Faker;
use DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $cities = [
        	[
        		"id" => 4, 
        		"id_province" => 9,
        		"name" => "blitar",
        		"postal_code" => $faker->postcode,
        	],
        	[
        		"id" => 5, 
        		"id_province" => 9,
        		"name" => "malang",
        		"postal_code" => $faker->postcode,
        	],
        	[
        		"id" => 6, 
        		"id_province" => 22,
        		"name" => "Depok",
        		"postal_code" => $faker->postcode,
        	]
        ];
        foreach ($cities as $key => $value) {
            DB::table('cities')->insert([
                'id' => $value['id'],
                'id_province' => $value['id_province'],
                'name' => $value['name'],
                'postal_code' => $value['postal_code'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
