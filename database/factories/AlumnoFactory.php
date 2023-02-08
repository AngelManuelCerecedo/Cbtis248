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
            'Numero_Control' => $this->faker->unique()->randomElement(['17161234567892','17161234567891','17161234567893','17161234567894','17161234567895','17161234567896','17161234567897','17161234567898','17161234567899','17161234567881']),
            'Estatus' => $this->faker->randomElement(['Activo']),
            'Curp' => $this->faker->unique()->randomElement(['CETA990110HOCRLN06','PUAB990110HOCRLN06','HOCT990110HOCRLN06','CRAL990110HOCRLN06','LTOP990110HOCRLN06','MAPT990110HOCRLN06','DTCO990110HOCRLN06','ATCE990110HOCRLN06','ATEC990110HOCRLN06','LOOP990110HOCRLN06']),
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
            'Celular_Alum' => $this->faker->randomElement(['951423423','9511233212','9515677656','9517899889','9510345981','9511066675']),
            'Numero_Seguro' => $this->faker->unique()->randomElement(['88179153793','67625716832','43583309762','86735758787','70682389862','98664406210','46710864089','86750690285','77047199785','69513456523']),
            'Tipo_Sangre' => $this->faker->randomElement(['A+','O+','ORH+','ORH-','B+','AB+']),
            'Año_Fin' => $this->faker->randomElement(['2022-01-23','2020-04-13','2021-07-1','2019-10-29']),
            'Promedio' => $this->faker->randomElement(['9','8','7','6']),
            'secundaria_id' => $this->faker->numberBetween(1,10),
            'padre_id' => $this->faker->numberBetween(1,10),
            'grupo_id' => null,
            'especialidad_id' => $this->faker->numberBetween(1,6),
            'grado_id' => $this->faker->numberBetween(1,1),
        ];
    }
}
