<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [   "name"          => "San Cristobal",
                "description"   => "Ciudad de Tachira",
                "state_id"      =>  1,
                "aedic_index"   => "21.6%",
                "temperature"   => "22 C",
                "humidity"      => "72%",
                "population"    =>  "578.648"
            ]

        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
