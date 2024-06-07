<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Extintores;
use App\Models\Inspecciones;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspecciones>
 */
class InspeccionesFactory extends Factory
{
    protected $model = \App\Models\Inspecciones::class;

    public function definition()
    {
        return [
            'idextintor' => Extintores::factory(),
            'fecha' => $this->faker->date(),
            'proximainspeccion' => $this->faker->date(),
        ];
    }
}