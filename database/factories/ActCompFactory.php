<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActCompFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->randomElement(['TIC','TUTORIA','RMATEMATICAS','RPROGRAMACION','MUSICA']),
            'HoraSem' => $this->faker->numberBetween(1,3),
        ];
    }
}
