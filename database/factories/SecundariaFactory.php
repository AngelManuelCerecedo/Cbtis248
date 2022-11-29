<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SecundariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ClaveSecu' => $this->faker->unique()->randomElement(['LOPT','PUBA','QLTE','ZARE','PLOT','TOUE','LOPQ','PUBG','QLTJ','ZARB']),
            'Nombre' => $this->faker->randomElement(['ST1','ST2','ST3','ST4','ST5','ST6','ST7','ST8','ST9','ST170']),
            'Modalidad' => $this->faker->randomElement(['General','Tecnica','Telesecundaria','Otra']),
            'Regimen' => $this->faker->randomElement(['Publica','Privada']),
        ];
    }
}
