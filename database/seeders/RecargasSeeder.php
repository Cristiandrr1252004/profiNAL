<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recargas;

class RecargasSeeder extends Seeder
{
    public function run()
    {
        Recargas::factory()->count(10)->create();
    }
}