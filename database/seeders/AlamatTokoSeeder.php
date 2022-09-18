<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlamatToko;

class AlamatTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'city_id' => '444',
            'detail' => 'Kecamatan Surabaya',
            ]
        ];
        AlamatToko::insert($data);
    }
}
