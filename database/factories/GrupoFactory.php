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
            'Clave_Grupo' => $this->faker->unique()->randomElement(['1A', '2A', '3A', '4A', '5A', '6A', '1B', '2B', '3B', '4B', '5B', '6B', '1C', '2C', '3C', '4C', '5C', '6C', '1D', '2D', '3D', '4D', '5D', '6D', '1F', '2F', '3F', '4F', '5F', '6F']),
            'Salon' => $this->faker->numberBetween(1, 15),
            'TotAL' => 30,
            'ALR' => 0,
            'Estatus' => $this->faker->randomElement(['Disponible']),
            'grado_id' => $this->faker->randomElement(['1', '6']),
            'ciclo_id' => $this->faker->randomElement(['1']),
            'especialidad_id' => $this->faker->numberBetween(1, 6),
        ];
    }
}
