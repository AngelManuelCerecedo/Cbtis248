<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidad;
class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::create(['Nombre'=>'Administracion']);
        Especialidad::create(['Nombre'=>'Soporte y Mantenimiento']);
        Especialidad::create(['Nombre'=>'Programacion']);
        Especialidad::create(['Nombre'=>'Mantenimiento Automotriz']);
        Especialidad::create(['Nombre'=>'Servicios de Hospedaje']);
        Especialidad::create(['Nombre'=>'Bebidas y Alimentos']);
    }
}