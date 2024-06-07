<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Extintores;

class ExtintoresSeeder extends Seeder
{
    public function run()
    {
        Extintores::factory()->count(10)->create();
    }
}