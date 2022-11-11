<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PadreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->randomElement(['Alejandro','Rosa','Pedro','Luis','Rene']),
            'ApPaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'ApMaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'Telefono' => $this->faker->randomElement(['951423423','9511233212','9515677656','9517899889','9510345981','9511066675']),
        ];
    }
}
