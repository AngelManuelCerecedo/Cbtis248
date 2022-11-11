<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Curp' => $this->faker->unique()->randomElement(['x','c','v','n','m','xx','cc','vv','nn','mm']),
            'Nombre' => $this->faker->randomElement(['Alejandro','Rosa','Pedro','Luis','Rene']),
            'ApPaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'ApMaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'Correo_Electronico' => $this->faker->email(),
            'Estado_Civil' => $this->faker->randomElement(['Soltero','Casado','Viudo','Divorciado']),
            'Lugar_Nacimiento' => $this->faker->randomElement(['Oaxaca','Puebla','Veracruz','CDMX']),
            'Lugar_Radica' => $this->faker->randomElement(['Oaxaca','Etla','ElChayo','SanMartin']),
            'Localidad' => $this->faker->randomElement(['Oaxaca','Etla','ElChayo','SanMartin']),
            'Codigo_Postal' => $this->faker->randomElement(['68000','68123','68200','68900']),
            'Calle_Num' => $this->faker->randomElement(['1','2','3','4']),
            'Colonia' => $this->faker->randomElement(['Oaxaca','Etla','ElChayo','SanMartin']),
            'Telefono_Fijo' => $this->faker->randomElement(['951423423','9511233212','9515677656','9517899889','9510345981','9511066675']),
            'Celular_Alum' => $this->faker->randomElement(['951423423','9511233212','9515677656','9517899889','9510345981','9511066675']),
            'Numero_Seguro' => $this->faker->randomElement(['951423423','9511233212','9515677656','9517899889','9510345981','9511066675']),
            'Tipo_Sangre' => $this->faker->randomElement(['A+','O+','ORH+','ORH-','B+','AB+']),
            'Año_Fin' => $this->faker->randomElement(['2022-01-23','2020-04-13','2021-07-1','2019-10-29']),
            'Promedio' => $this->faker->randomElement(['9','8','7','6']),
            'secundaria_id' => $this->faker->numberBetween(1,10),
            'padre_id' => $this->faker->numberBetween(1,10),
            'grupo_id' => $this->faker->numberBetween(1,6),
            'especialidad_id' => $this->faker->numberBetween(1,6),
            'grado_id' => $this->faker->numberBetween(1,6),
        ];
    }
}
