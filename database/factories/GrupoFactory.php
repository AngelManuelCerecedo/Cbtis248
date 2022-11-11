<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Clave_Grupo' => $this->faker->unique()->randomElement(['6as','7as','8bz','9op','1eq','3kñ']),
            'Turno' => $this->faker->randomElement(['Turno','Vespertino']),
            'Especialidad' => $this->faker->randomElement(['Programacion','Administracion de RH','Soporte y Mantenimiento a EC','Alimentos y Bebidas','Mantenimiento Automotriz','Servicios de Hospedaje']),
            'Salon' => $this->faker->numberBetween(1,15),
            'grado_id' => $this->faker->numberBetween(1,6),
            'ciclo_id' => $this->faker->randomElement(['1']),
        ];
    }
}
