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
            'Perfil' => 'Ing',
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

        User::create([
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR99041904',
            'Nombre' => 'Pedro',
            'ApPaterno' => 'Actua',
            'ApMaterno' => 'Flor',
            'Rfc' => 'AEFR99041904',
            'Clave_Cobro' => '1',
            'Puesto' => 'Administrativo',
            'Perfil' => 'Ing',
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

        User::create([
            'email' => 'prueba@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419044',
            'Nombre' => 'Juan',
            'ApPaterno' => 'Perez',
            'ApMaterno' => 'Perez',
            'Rfc' => 'AEFR990419044',
            'Clave_Cobro' => '1',
            'Puesto' => 'Administrativo',
            'Perfil' => 'Ing',
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

        User::create([
            'email' => 'prueba2@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419090',
            'Nombre' => 'Simon',
            'ApPaterno' => 'Lopez',
            'ApMaterno' => 'Gonzales',
            'Rfc' => 'AEFR990419045',
            'Clave_Cobro' => '1',
            'Puesto' => 'Docente',
            'Perfil' => 'Ing',
            'Fecha_ingreso' => '2022-01-23',
            'Fecha_ingreso_SEP' => '2022-01-23',
            'Fecha_ingreso_DGETI' => '2022-01-23',
            'Categoria' => 'Contrato',
            'Numero_Tarjeta' => '1',
            'Horas_Nom' => 1,
            'Numero_Plaza' => '1',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
        ])->assignRole('SuperAdministrador');

        User::create([
            'email' => 'prueba3@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419046',
            'Nombre' => 'Timon',
            'ApPaterno' => 'Hernandez',
            'ApMaterno' => 'Martinez',
            'Rfc' => 'AEFR990419047',
            'Clave_Cobro' => '1',
            'Puesto' => 'Docente',
            'Perfil' => 'Ing',
            'Fecha_ingreso' => '2022-01-23',
            'Fecha_ingreso_SEP' => '2022-01-23',
            'Fecha_ingreso_DGETI' => '2022-01-23',
            'Categoria' => 'Contrato',
            'Numero_Tarjeta' => '1',
            'Horas_Nom' => 1,
            'Numero_Plaza' => '1',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
        ])->assignRole('SuperAdministrador');

        User::create([
            'email' => 'prueba4@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419048',
            'Nombre' => 'Edgar',
            'ApPaterno' => 'Rodriguez',
            'ApMaterno' => 'Pelaes',
            'Rfc' => 'AEFR990419048',
            'Clave_Cobro' => '1',
            'Puesto' => 'Docente/Administrativo',
            'Perfil' => 'Ing',
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

        User::create([
            'email' => 'prueba5@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419049',
            'Nombre' => 'Gustavo',
            'ApPaterno' => 'Gaviria',
            'ApMaterno' => 'Torres',
            'Rfc' => 'AEFR990419049',
            'Clave_Cobro' => '1',
            'Puesto' => 'Docente',
            'Perfil' => 'Ing',
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

        User::create([
            'email' => 'prueba6@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419051',
            'Nombre' => 'Roberto',
            'ApPaterno' => 'Carlos',
            'ApMaterno' => 'Guzman',
            'Rfc' => 'AEFR990419051',
            'Clave_Cobro' => '1',
            'Puesto' => 'Docente',
            'Perfil' => 'Ing',
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

        User::create([
            'email' => 'prueba7@gmail.com',
            'password' => bcrypt('12345678'),
            'password2' => encrypt('12345678'),
            'Curp' => 'AEFR990419052',
            'Nombre' => 'Karla',
            'ApPaterno' => 'Alavez',
            'ApMaterno' => 'Lopez',
            'Rfc' => 'AEFR990419052',
            'Clave_Cobro' => '1',
            'Puesto' => 'Docente',
            'Perfil' => 'Ing',
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
