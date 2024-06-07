<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UbicacionesSeeder::class,
            ProveedoresSeeder::class,
            TiposSeeder::class,
            ExtintoresSeeder::class,
            InspeccionesSeeder::class,
            RecargasSeeder::class,
            UserSeeder::class,
        ]);
    }
}