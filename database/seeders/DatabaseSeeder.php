<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Secundaria;
use App\Models\Padre;
use App\Models\CicloEscolar;
use App\Models\Grado;
use App\Models\Especialidad;
use App\Models\ActComp;
use App\Models\User;
use App\Models\Profesor;
use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Incidencia;
use App\Models\Materia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Secundaria::factory(10)->create();
        Padre::factory(10)->create();
        $this->call(CicloSeeder::class);
        $this->call(GradoSeeder::class);
        $this->call(EspecialidadSeeder::class);
        ActComp::factory(10)->create();
        User::factory(10)->create();
        Profesor::factory(10)->create();
        Grupo::factory(6)->create();
        Alumno::factory(10)->create();
        Incidencia::factory(10)->create();
        Materia::factory(10)->create();
    }
}
