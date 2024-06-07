<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipos;

class TiposSeeder extends Seeder
{
    public function run()
    {
        Tipos::factory()->count(5)->create();
    }
}