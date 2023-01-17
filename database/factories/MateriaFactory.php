<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->randomElement(['POO','Quimica','LEOyE','Calculo','Fundamentos']),
            'Horas_Sem' => $this->faker->numberBetween(1,6),
            'Estatus' => $this->faker->randomElement(['Abierta','Cerrada']),
            'Tipo' => $this->faker->randomElement(['Materia']),
            'Salon' => $this->faker->randomElement(['h1','h2','h3','h4','h5',]),
            'especialidad_id' => $this->faker->numberBetween(1,6),
            'grado_id' => $this->faker->numberBetween(1,6),
        ];
    }
}
