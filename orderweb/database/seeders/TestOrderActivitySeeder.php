<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestOrderActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::find(1);
        $activity = Activity::find(1);
        //Guardamos En order_activity Para La Orden 1 La Actividad 1
        //$order->activities()->attach($activity->id);
        //Quitar La Actividad Para Una Orden
        $order->activities()->detach($activity->id);
    }
}
