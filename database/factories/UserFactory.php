<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => $this->faker->unique()->randomElement(['q','w','e','r','t','y','u','i','o','p']),
            'Nombre' => $this->faker->randomElement(['Alejandro','Rosa','Pedro','Luis','Rene']),
            'ApPaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'ApMaterno' => $this->faker->randomElement(['Lopez','Matrinez','Gonzales','Velasquez','Robles']),
            'Rfc' => $this->faker->unique()->randomElement(['qq','ww','ee','rr','tt','yy','uu','ii','oo','pp']),
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

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
