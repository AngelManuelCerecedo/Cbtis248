<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'angel@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419',
            'Nombre' => 'Angel Manuel',
            'ApPaterno' => 'Cerecedo',
            'ApMaterno' => 'Toledo',
            'Rfc' => 'AEFR990419',
            'Clave_Cobro' => '1',
            'Puesto' => 'Administrativo',
            'Perfil_A' => 'Ing',
            'Perfil' => 'Ingeniero En Sistemas',
            'Fecha_ingreso' => '2022-01-23',
            'Fecha_ingreso_SEP' => '2022-01-23',
            'Fecha_ingreso_DGETI' => '2022-01-23',
            'Categoria' => 'Contrato',
            'Numero_Tarjeta' => '1',
            'Horas_Nom' => 1,
            'Numero_Plaza' => '1',
            'Tipo' => 'Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ])->assignRole('SuperAdministrador');
    }
}
