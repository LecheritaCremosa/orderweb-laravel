<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technician = new Technician();
        $technician->document = 988998;
        $technician->name = 'Travieso Scott';
        $technician->especiality = 'Medición De Redes';
        $technician->phone = '315626';
        $technician->save();
    }
}
