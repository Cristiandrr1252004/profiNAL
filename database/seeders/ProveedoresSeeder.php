<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedores;

class ProveedoresSeeder extends Seeder
{
    public function run()
    {
        Proveedores::factory()->count(10)->create();
    }
}