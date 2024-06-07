<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Extintores;
use App\Models\Tipos;
use App\Models\Ubicaciones;
use App\Models\Proveedores;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extintores>
 */
class ExtintoresFactory extends Factory
{
    protected $model = \App\Models\Extintores::class;

    public function definition()
    {
        return [
            'capacidad' => $this->faker->numberBetween(1, 100),
            'fechafabricacion' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['nuevo', 'usado', 'defectuoso']),
            'idtipo' => $this->faker->numberBetween(1,5),
            'idubicacion' => $this->faker->numberBetween(1,10),
            'idproveedor' => $this->faker->numberBetween(1,10)
        ];
    }
}