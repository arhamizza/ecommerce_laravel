<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        // $jumlahprovinsi=['Aceh','Bali','Banten','Bengkulu','D.I Yogyakarta'];
        // foreach ($jumlahprovinsi as $key => $value) {
        //     DB::table('provinces')->insert([
        //         'email'=>$faker->email,
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
        //     ]);
        // }

        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 35; $i++) { 
            \DB::table('provinces')->insert([
                'name'=>$faker->state,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
