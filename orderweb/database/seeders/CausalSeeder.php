<?php

namespace Database\Seeders;

use App\Models\Causal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CausalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Causal::insert([['description' => 'Reparación Contador', 'description' => 'Suspensión Del Servicio', 'description' => 'Reconexión Del Servicio', 'description' => 'Instalación Del Contador', 'description' => 'Cambio Del Contador']]);
    }
}
