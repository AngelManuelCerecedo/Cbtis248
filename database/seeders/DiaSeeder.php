<?php

namespace Database\Seeders;

use App\Models\Dia;
use Illuminate\Database\Seeder;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dia::create(['Dia'=>'Lunes']);
        Dia::create(['Dia'=>'Martes']);
        Dia::create(['Dia'=>'Miercoles']);
        Dia::create(['Dia'=>'Jueves']);
        Dia::create(['Dia'=>'Viernes']);
    }
}
