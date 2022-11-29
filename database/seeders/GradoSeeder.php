<?php

namespace Database\Seeders;

use App\Models\Grado;
use Illuminate\Database\Seeder;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grado::create(['Nombre'=>'Primero']);
        Grado::create(['Nombre'=>'Segundo']);
        Grado::create(['Nombre'=>'Tercero']);
        Grado::create(['Nombre'=>'Cuarto']);
        Grado::create(['Nombre'=>'Quinto']);
        Grado::create(['Nombre'=>'Sexto']);
    }
}
