<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [   "name"          => "Tachira",
                "description"   => "Estado Occidental",
                "country_id"    => 1
            ]

        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
