<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Technician;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    /*$this->call(RoleSeeder::class);
    $this->call(CausalSeeder::class);
    $this->call(ObservationSeeder::class);
    $this->call(TypeActivitySeeder::class);
    
    User::factory()->create(['role_id' => 1]); //Se Crea Un Usuario Con Rol Administrador
    User::factory(3)->create(['role_id' => 2]); //Se Crean Varios Usuarios Con Rol Supervisor
    Technician::factory()->create(['especiality' => 'Instalación De Redes']);
    Technician::factory(2)->create(['especiality' => 'Construcción']);
    Technician::factory(2)->create(['especiality' => 'Lectura De Redes']);
    Technician::factory(2)->create(); //Técnico Sin Especialidad*/
    
    
    //$this->call(TestTechnicianSeeder::class);

    $this->call((TestActivitySeeder::class));
}

}
