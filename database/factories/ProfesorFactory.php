<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Curp' => $this->faker->unique()->randomElement(['a','s','d','f','g','h','j','k','l','z']),
            'Nombre' => $this->faker->randomElement(['Alejandro','Rosa','Pedro','Luis','Rene']),
            'ApPaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'ApMaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'Rfc' => $this->faker->unique()->randomElement(['aa','ss','dd','ff','gg','hh','jj','kk','ll','zz']),
            'Clave_Cobro' => $this->faker->randomElement(['1','2','3']),
            'Puesto' => $this->faker->randomElement(['Profesor']),
            'Perfil' => $this->faker->randomElement(['Lic.','Ing','Quimico']),
            'Fecha_ingreso' => $this->faker->randomElement(['2022-01-23','2020-04-13','2021-07-1','2019-10-29']),
            'Fecha_ingreso_SEP' => $this->faker->randomElement(['2022-01-23','2020-04-13','2021-07-1','2019-10-29']),
            'Fecha_ingreso_DGETI' => $this->faker->randomElement(['2022-01-23','2020-04-13','2021-07-1','2019-10-29']),
            'Categoria' => $this->faker->randomElement(['Honorarios','Contrato']),
            'Numero_Tarjeta' => $this->faker->randomElement(['1','2','3']),
            'Horas_Nom' => $this->faker->numberBetween(1,6),
            'Numero_Plaza' => $this->faker->randomElement(['1','2','3']),
            'Observaciones' => $this->faker->randomElement(['Sin Observaciones']),
            'Estatus' => $this->faker->randomElement(['Activo','Inactivo']),
        ];
    }
}
