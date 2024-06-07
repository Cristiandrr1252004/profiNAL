<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tipos>
 */
class TiposFactory extends Factory
{
    protected $model = \App\Models\Tipos::class;

    public function definition()
    {
        static $tipos = ['verde', 'rojo', 'azul', 'amarillo', 'negro'];
        return [
            'nombre' => array_pop($tipos),
        ];
    }
}

