<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create(['Clave_Grupo'=>'1A', 'Salon' => 'F2' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 1, 'ciclo_id' => 2, 'especialidad_id' => 1]);
        Grupo::create(['Clave_Grupo'=>'2A', 'Salon' => 'F2' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 2, 'ciclo_id' => 2, 'especialidad_id' => 1]);
        Grupo::create(['Clave_Grupo'=>'3A', 'Salon' => 'C12' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 3, 'ciclo_id' => 2, 'especialidad_id' => 1]);
        Grupo::create(['Clave_Grupo'=>'4A', 'Salon' => 'C12' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 4, 'ciclo_id' => 2, 'especialidad_id' => 1]);
        Grupo::create(['Clave_Grupo'=>'5A', 'Salon' => 'H19' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 5, 'ciclo_id' => 2, 'especialidad_id' => 1]);
        Grupo::create(['Clave_Grupo'=>'6A', 'Salon' => 'H19' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 6, 'ciclo_id' => 2, 'especialidad_id' => 1]);

        Grupo::create(['Clave_Grupo'=>'1B', 'Salon' => 'F3' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 1, 'ciclo_id' => 2, 'especialidad_id' => 2]);
        Grupo::create(['Clave_Grupo'=>'2B', 'Salon' => 'F4' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 2, 'ciclo_id' => 2, 'especialidad_id' => 2]);
        Grupo::create(['Clave_Grupo'=>'3B', 'Salon' => 'C13' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 3, 'ciclo_id' => 2, 'especialidad_id' => 2]);
        Grupo::create(['Clave_Grupo'=>'4B', 'Salon' => 'C13' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 4, 'ciclo_id' => 2, 'especialidad_id' => 2]);
        Grupo::create(['Clave_Grupo'=>'5B', 'Salon' => 'H20' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 5, 'ciclo_id' => 2, 'especialidad_id' => 2]);
        Grupo::create(['Clave_Grupo'=>'6B', 'Salon' => 'H20' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 6, 'ciclo_id' => 2, 'especialidad_id' => 2]);

        Grupo::create(['Clave_Grupo'=>'1C', 'Salon' => 'F4' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 1, 'ciclo_id' => 2, 'especialidad_id' => 3]);
        Grupo::create(['Clave_Grupo'=>'2C', 'Salon' => 'F4' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 2, 'ciclo_id' => 2, 'especialidad_id' => 3]);
        Grupo::create(['Clave_Grupo'=>'3C', 'Salon' => 'H17' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 3, 'ciclo_id' => 2, 'especialidad_id' => 3]);
        Grupo::create(['Clave_Grupo'=>'4C', 'Salon' => 'H17' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 4, 'ciclo_id' => 2, 'especialidad_id' => 3]);
        Grupo::create(['Clave_Grupo'=>'5C', 'Salon' => 'J21' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 5, 'ciclo_id' => 2, 'especialidad_id' => 3]);
        Grupo::create(['Clave_Grupo'=>'6C', 'Salon' => 'J21' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 6, 'ciclo_id' => 2, 'especialidad_id' => 3]);

        Grupo::create(['Clave_Grupo'=>'1D', 'Salon' => 'A8' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 1, 'ciclo_id' => 2, 'especialidad_id' => 4]);
        Grupo::create(['Clave_Grupo'=>'2D', 'Salon' => 'A8' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 2, 'ciclo_id' => 2, 'especialidad_id' => 4]);
        Grupo::create(['Clave_Grupo'=>'3D', 'Salon' => 'H18' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 3, 'ciclo_id' => 2, 'especialidad_id' => 4]);
        Grupo::create(['Clave_Grupo'=>'4D', 'Salon' => 'H18' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 4, 'ciclo_id' => 2, 'especialidad_id' => 4]);
        Grupo::create(['Clave_Grupo'=>'5D', 'Salon' => 'J22' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 5, 'ciclo_id' => 2, 'especialidad_id' => 4]);
        Grupo::create(['Clave_Grupo'=>'6D', 'Salon' => 'J22' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 6, 'ciclo_id' => 2, 'especialidad_id' => 4]);

        Grupo::create(['Clave_Grupo'=>'1E', 'Salon' => 'E5' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 1, 'ciclo_id' => 2, 'especialidad_id' => 5]);
        Grupo::create(['Clave_Grupo'=>'2E', 'Salon' => 'E5' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 2, 'ciclo_id' => 2, 'especialidad_id' => 5]);
        Grupo::create(['Clave_Grupo'=>'3E', 'Salon' => 'I15' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 3, 'ciclo_id' => 2, 'especialidad_id' => 5]);
        Grupo::create(['Clave_Grupo'=>'4E', 'Salon' => 'I15' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 4, 'ciclo_id' => 2, 'especialidad_id' => 5]);
        Grupo::create(['Clave_Grupo'=>'5E', 'Salon' => 'K23' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 5, 'ciclo_id' => 2, 'especialidad_id' => 5]);
        Grupo::create(['Clave_Grupo'=>'6E', 'Salon' => 'K23' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 6, 'ciclo_id' => 2, 'especialidad_id' => 5]);

        Grupo::create(['Clave_Grupo'=>'1F', 'Salon' => 'C11' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 1, 'ciclo_id' => 2, 'especialidad_id' => 6]);
        Grupo::create(['Clave_Grupo'=>'2F', 'Salon' => 'C11' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 2, 'ciclo_id' => 2, 'especialidad_id' => 6]);
        Grupo::create(['Clave_Grupo'=>'3F', 'Salon' => 'I16' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 3, 'ciclo_id' => 2, 'especialidad_id' => 6]);
        Grupo::create(['Clave_Grupo'=>'4F', 'Salon' => 'I16' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 4, 'ciclo_id' => 2, 'especialidad_id' => 6]);
        Grupo::create(['Clave_Grupo'=>'5F', 'Salon' => 'K24' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 5, 'ciclo_id' => 2, 'especialidad_id' => 6]);
        Grupo::create(['Clave_Grupo'=>'6F', 'Salon' => 'K24' , 'TotAL' => '30', 'ALR' => '0', 'Estatus' => 'Disponible', 'grado_id' => 6, 'ciclo_id' => 2, 'especialidad_id' => 6]);
    }
}
