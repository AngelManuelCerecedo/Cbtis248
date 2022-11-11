<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EspecialidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->unique()->randomElement(['Programacion','Administracion de RH','Soporte y Mantenimiento a EC','Alimentos y Bebidas','Mantenimiento Automotriz','Servicios de Hospedaje']),
        ];
    }
}
