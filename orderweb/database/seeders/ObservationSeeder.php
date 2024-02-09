<?php

namespace Database\Seeders;

use App\Models\Observation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::insert([['description' => 'Perro Bravo'], ['description' => 'Contador Con Candado'], ['description' => 'Contador Inaccesible'], ['description' => 'Predio En Construcción'], ['description' => 'No Existe Contador']]);
    }
}
