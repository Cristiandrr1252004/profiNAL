<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inspecciones;

class InspeccionesSeeder extends Seeder
{
    public function run()
    {
        Inspecciones::factory()->count(10)->create();
    }
}
