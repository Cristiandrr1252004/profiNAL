<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ubicaciones;

class UbicacionesSeeder extends Seeder
{
    public function run()
    {
        Ubicaciones::factory()->count(10)->create();
    }
}
