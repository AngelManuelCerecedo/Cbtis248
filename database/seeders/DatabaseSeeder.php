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
        Secundaria::factory(10)->create();
        Padre::factory(10)->create();
        $this->call(CicloSeeder::class);
        $this->call(GradoSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(DiaSeeder::class);
        $this->call(HoraSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        //Profesor::factory(10)->create();
        $this->call(GrupoSeeder::class);
        Alumno::factory(10)->create();
        Incidencia::factory(10)->create();
        $this->call(MateriaSeeder::class);
        //Materia::factory(10)->create();
        
    }
}
