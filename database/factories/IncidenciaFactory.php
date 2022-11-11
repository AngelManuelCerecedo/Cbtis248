<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IncidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fecha' => $this->faker->randomElement(['2022-01-23','2020-04-13','2021-07-1','2019-10-29']),
            'Descripcion' => $this->faker->randomElement(['problema1','problema2','problema3','problema4']),
            'id_Ciclo' => $this->faker->randomElement(['1']),
            'alumno_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
