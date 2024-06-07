<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Extintores;
use App\Models\Recargas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recargas>
 */
class RecargasFactory extends Factory
{
    protected $model = \App\Models\Recargas::class;

    public function definition()
    {
        return [
            'idextintor' => Extintores::factory(),
            'fecha' => $this->faker->date(),
            'proximarecarga' => $this->faker->date(),
        ];
    }
}