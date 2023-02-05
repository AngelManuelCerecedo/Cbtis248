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

        // User::create([
        //     'email' => 'gabriel.amaya.cb248@uemstis.sems.gob.mx',
        //     'Curp' => 'AACG761006HOCMRB08',
        //     'Nombre' => 'Gabriel',
        //     'ApPaterno' => 'Amaya',
        //     'ApMaterno' => 'Cruz',
        //     'Rfc' => 'AACG7610061N4',
        //     'Clave_Cobro' => '2702XA08004000271083',
        //     'Puesto' => 'Aux de Intendencia',
        //     'Perfil_A' => 'Tec',
        //     'Perfil' => '',
        //     'Fecha_ingreso' => '2001-09-16',
        //     'Fecha_ingreso_DGETI' => '2001-09-16',
        //     'Categoria' => 'Contrato',
        //     'Numero_Tarjeta' => '201',
        //     'Horas_Nom' => 0,
        //     'Numero_Plaza' => '2702XA08004000271083',
        //     'Tipo' => 'No Usuario',
        //     'Observaciones' => 'Sin Observaciones',
        //     'Estatus' => 'Activo',
        //     'EstatusUser'=>'Activo'
            
        // ]);
        // User::create([
        //     'email' => 'rocio.amaya.cb248@dgeti.sems.gob.mx',
        //     'Curp' => 'AAMR960328MOCMNC08',
        //     'Nombre' => 'Rocio',
        //     'ApPaterno' => 'Amaya',
        //     'ApMaterno' => 'Mendez',
        //     'Rfc' => 'AAMR9603282B1',
        //     'Clave_Cobro' => '',
        //     'Puesto' => 'Jefa Ofna. Almacén',
        //     'Perfil_A' => '',
        //     'Perfil' => '',
        //     'Fecha_ingreso' => '',
        //     'Fecha_ingreso_SEP' => '',
        //     'Fecha_ingreso_DGETI' => '2018-01-16',
        //     'Categoria' => 'Contrato',
        //     'Numero_Tarjeta' => '',
        //     'Horas_Nom' => 0,
        //     'Numero_Plaza' => '2702XA08036000270398',
        //     'Tipo' => 'No Usuario',
        //     'Observaciones' => 'Sin Observaciones',
        //     'Estatus' => 'Activo',
        //     'EstatusUser'=>'Activo'
            
        // ]);
        // User::create([
        //     'email' => 'rebeca.antonio.cb248@dgeti.sems.gob.mx',
        //     'Curp' => 'AOCR890709MOCNNB03',
        //     'Nombre' => 'Rebeca',
        //     'ApPaterno' => 'Antonio',
        //     'ApMaterno' => 'Canseco',
        //     'Rfc' => 'AOCR8907092B8',
        //     'Clave_Cobro' => '',
        //     'Puesto' => 'Aux. Control Escolar',
        //     'Perfil_A' => '',
        //     'Perfil' => '',
        //     'Fecha_ingreso' => '',
        //     'Fecha_ingreso_SEP' => '',
        //     'Fecha_ingreso_DGETI' => '2016-08-16',
        //     'Categoria' => 'Contrato',
        //     'Numero_Tarjeta' => '',
        //     'Horas_Nom' => 0,
        //     'Numero_Plaza' => '2702XA08034000270060',
        //     'Tipo' => 'No Usuario',
        //     'Observaciones' => 'Sin Observaciones',
        //     'Estatus' => 'Activo',
        //     'EstatusUser'=>'Activo'
            
        // ]);
        User::create([
            'email' => 'aquisalazar1@gmail.com',
            'Curp' => 'AUSG790210HOCQLL07',
            'Nombre' => 'Guillermo',
            'ApPaterno' => 'Aquino',
            'ApMaterno' => 'Salazar',
            'Rfc' => 'AUSG790210FX8',
            'Clave_Cobro' => '2702E4727000060057',
            'Puesto' => 'Docente/Jefe Depto. Planeacion',
            'Perfil_A' => 'Lic',
            'Perfil' => 'Licenciatura en Informatica',
            'Fecha_ingreso' => '2002-06-01',
            'Fecha_ingreso_DGETI' => '2002-06-01',
            'Categoria' => 'Titular "A"',
            'Numero_Tarjeta' => '201',
            'Horas_Nom' => 30,
            'Numero_Plaza' => '2702E4727000060057',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User::create([
            'email' => 'gonzalezrey59@hotmail.com',
            'Curp' => 'GORC590705HOCNYF07',
            'Nombre' => 'Cifredo',
            'ApPaterno' => 'Gonzáles',
            'ApMaterno' => 'Reyes',
            'Rfc' => 'GORC590705ID4',
            'Clave_Cobro' => '2702E4829000000597',
            'Puesto' => 'Docente',
            'Perfil_A' => 'Ing',
            'Perfil' => 'Ingeniero Civil en Desarrollo de la Comunidad',
            'Fecha_ingreso' => '1979-09-01',
            'Fecha_ingreso_DGETI' => '1979-09-01',
            'Categoria' => 'Titular "B"',
            'Numero_Tarjeta' => '202',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4829000000597',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User::create([
            'email' => 'chpe66tk@hotmail.com',
            'Curp' => 'PIEG660119HOCNSN05',
            'Nombre' => 'Gonzalo',
            'ApPaterno' => 'Pineda',
            'ApMaterno' => 'Esteva',
            'Rfc' => 'PIEG660119IFA',
            'Clave_Cobro' => '2702E4863000272589',
            'Puesto' => 'Docente',
            'Perfil_A' => 'Ing',
            'Perfil' => 'Ingeniero Electromecanico',
            'Fecha_ingreso' => '1995-05-16',
            'Fecha_ingreso_DGETI' => '1995-05-16',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '203',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4863000272589',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);
        
        User::create([
            'email' => 'bany-perfa@hotmail.com',
            'Curp' => 'PEFL630725HOCRRV03',
            'Nombre' => 'Leovañe Cristobal',
            'ApPaterno' => 'Perzabal',
            'ApMaterno' => 'Farret',
            'Rfc' => 'PEFL630725F96',
            'Clave_Cobro' => '2702E4517190270164',
            'Puesto' => 'Docente/Coordinacion Promocion Deportiva',
            'Perfil_A' => 'Pas',
            'Perfil' => 'Pasante en Lic. Historia',
            'Fecha_ingreso' => '1997-04-01',
            'Fecha_ingreso_DGETI' => '1997-04-01',
            'Categoria' => 'Asignatura "B"',
            'Numero_Tarjeta' => '203',
            'Horas_Nom' => 0,
            'Numero_Plaza' => '2702E4517190270164',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User::create([
            'email' => 'ananias.27.66@gmail.com',
            'Curp' => 'MARA660327MOCRSN00',
            'Nombre' => 'Ananias',
            'ApPaterno' => 'Martinez',
            'ApMaterno' => 'Rios',
            'Rfc' => 'MARA660327RX9',
            'Clave_Cobro' => '2701E4863000000195',
            'Puesto' => 'Docente/Apoyo Ofna. Medio y Metodos',
            'Perfil_A' => 'LCP',
            'Perfil' => 'Licenciatura en Contabilidad Publica',
            'Fecha_ingreso' => '1995-09-01',
            'Fecha_ingreso_DGETI' => '1995-09-01',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '204',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2701E4863000000195',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User::create([
            'email' => 'arangosos710714@gmail.com',
            'Curp' => 'AAAB710714MOCRRN07',
            'Nombre' => 'Buenavnetura Obdulia',
            'ApPaterno' => 'Arango',
            'ApMaterno' => 'Arango',
            'Rfc' => 'AAAB7107147N0',
            'Clave_Cobro' => '2702E48250000630',
            'Puesto' => 'Docente',
            'Perfil_A' => 'Lic',
            'Perfil' => 'Licenciatura en Derecho',
            'Fecha_ingreso' => '1993-01-01',
            'Fecha_ingreso_DGETI' => '1993-01-01',
            'Categoria' => 'Asociado "B"',
            'Numero_Tarjeta' => '205',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E48250000630',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User::create([
            'email' => 'gcaballero_2873@hotmail.com',
            'Curp' => 'CAMG730428HOCBNN00',
            'Nombre' => 'Genaro',
            'ApPaterno' => 'Caballero',
            'ApMaterno' => 'Mendoza',
            'Rfc' => 'CAMG730428PL7',
            'Clave_Cobro' => '1998E4727000000005',
            'Puesto' => 'Docente',
            'Perfil_A' => 'Ing',
            'Perfil' => 'Ingeniero Agronomo en Economia Agricola',
            'Fecha_ingreso' => '2010-02-01',
            'Fecha_ingreso_DGETI' => '2010-02-01',
            'Categoria' => 'Titular "A"',
            'Numero_Tarjeta' => '206',
            'Horas_Nom' => 30,
            'Numero_Plaza' => '1998E4727000000005',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User::create([
            'email' => 'Ccruzgs65@hotmail.com',
            'Curp' => 'GOSC650418MOCNNR04',
            'Nombre' => 'Cruz',
            'ApPaterno' => 'Gonzáles',
            'ApMaterno' => 'Sanjuan',
            'Rfc' => 'GOSC650418SMA',
            'Clave_Cobro' => '2702E4861000060039',
            'Puesto' => 'Docente',
            'Perfil_A' => 'LCP',
            'Perfil' => 'Licenciatura en Contabilidad Publica',
            'Fecha_ingreso' => '1998-06-01',
            'Fecha_ingreso_DGETI' => '1998-06-01',
            'Categoria' => 'Asociado "C"',
            'Numero_Tarjeta' => '207',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4861000060039',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User::create([
            'email' => 'michulisyesouioui@yahoo.com',
            'Curp' => 'RISE600620MOCVNL80',
            'Nombre' => 'Elsa Elvia',
            'ApPaterno' => 'Ribera',
            'ApMaterno' => 'Sanchez',
            'Rfc' => 'RISE6006202H9',
            'Clave_Cobro' => '2702E4827000271594',
            'Puesto' => 'Docente',
            'Perfil_A' => 'Doc',
            'Perfil' => 'Doctora en Ciencias de la Educación',
            'Fecha_ingreso' => '1988-01-16',
            'Fecha_ingreso_DGETI' => '1988-01-16',
            'Categoria' => 'Titular "A"',
            'Numero_Tarjeta' => '208',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4827000271594',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        // 2ohrs
        User::create([
            'email' => 'aleciram78@hotmail.com',
            'Curp' => 'NOMM711105MOCLRR06',
            'Nombre' => 'Maricela',
            'ApPaterno' => 'Nolasco',
            'ApMaterno' => 'Martinez',
            'Rfc' => 'NOMM7111054I8',
            'Clave_Cobro' => '2702E4661000271609',
            'Puesto' => 'Docente',
            'Perfil_A' => 'Lic',
            'Perfil' => 'Licenciatura en Informatica',
            'Fecha_ingreso' => '2002-08-16',
            'Fecha_ingreso_DGETI' => '2002-08-16',
            'Categoria' => 'Asociado "C"',
            'Numero_Tarjeta' => '209',
            'Horas_Nom' => 20,
            'Numero_Plaza' => '2702E4661000271609',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        // User::create([
        //     'email' => 'carlanrg@hotmail.com',
        //     'Curp' => 'HEAC730511MJCRGR06',
        //     'Nombre' => 'Carla Estela',
        //     'ApPaterno' => 'Hernandez',
        //     'ApMaterno' => 'Aguilar',
        //     'Rfc' => 'HEAC730511KD5',
        //     'Clave_Cobro' => '2702E4661000271609',
        //     'Puesto' => 'Docente',
        //     'Perfil_A' => 'Lic',
        //     'Perfil' => 'Licenciatura en Administración de Empresas',
        //     'Fecha_ingreso' => '2002-08-16',
        //     'Fecha_ingreso_DGETI' => '2005-04-01',
        //     'Categoria' => 'Asociado "B"',
        //     'Numero_Tarjeta' => '210',
        //     'Horas_Nom' => 20,
        //     'Numero_Plaza' => '2602E4625000060103',
        //     'Tipo' => 'No Usuario',
        //     'Observaciones' => 'Sin Observaciones',
        //     'Estatus' => 'Activo',
        //     'EstatusUser'=>'Activo'
            
        // ]);

        User::create([
            'email' => 'carlanrg@hotmail.com',
            'Curp' => 'HEAC730511MJCRGR06',
            'Nombre' => 'Carla Estela',
            'ApPaterno' => 'Hernandez',
            'ApMaterno' => 'Aguilar',
            'Rfc' => 'HEAC730511KD5',
            'Clave_Cobro' => '2702E4661000271609',
            'Puesto' => 'Docente',
            'Perfil_A' => 'Lic',
            'Perfil' => 'Licenciatura en Administración de Empresas',
            'Fecha_ingreso' => '2002-08-16',
            'Fecha_ingreso_DGETI' => '2005-04-01',
            'Categoria' => 'Asociado "B"',
            'Numero_Tarjeta' => '210',
            'Horas_Nom' => 20,
            'Numero_Plaza' => '2602E4625000060103',
            'Tipo' => 'No Usuario',
            'Observaciones' => 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=>'Activo'
            
        ]);

        User:: create([
            'email' => 'docente_pendiente1@cbtis248.edu.mx',
            'Curp' => 'PEUD750424HOCTMR02',
            'Nombre' => 'Docente',
            'ApPaterno'=> 'Pendiente',
            'ApMaterno' => 'Uno',
            'RfC' => 'PEUD7504247W0',
            'Clave_Cobro' => 'PORASIGNAR', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'NA',
            'Perfil' => 'NO APLICA',
            'Fecha_ingreso' => '2023-02-01' , 
            'Fecha_ingreso_DGETI' => '2023-02-01',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '312',
            'Horas_Nom' => 30,
            'Numero_Plaza' => 'PORASIGNAR',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'gtrujillo2031@gmail.com',
            'Curp' => 'TUSG600420HOCRNR02',
            'Nombre' => 'GERARDO',
            'ApPaterno'=> 'TRUJILLO',
            'ApMaterno' => 'SANCHEZ',
            'RfC' => 'TUSG600420AR4',
            'Clave_Cobro' => '2702E4863000273075', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'MCL',
            'Perfil' => 'MÉDICO CIRUJANO LEGISTA',
            'Fecha_ingreso' => '1988-10-01' , 
            'Fecha_ingreso_DGETI' => '1988-10-01',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '310',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4863000273075',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            User:: create([
            'email' => 'evaluzrg@hotmail.com',
            'Curp' => 'REGE710107MOCNRV01',
            'Nombre' => 'EVA LUZ',
            'ApPaterno'=> 'RENDON',
            'ApMaterno' => 'GARCIA',
            'RfC' => 'REGE710107DV0',
            'Clave_Cobro' => '2702E4863000274579', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'MA',
            'Perfil' => 'MAESTRA EN ADMINISTRACIÓN',
            'Fecha_ingreso' => '2000-03-01' , 
            'Fecha_ingreso_DGETI' => '2000-03-01',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '309',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4863000274579',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'josefapatricia.martinez.cb248@dgeti.sems.gob.mx',
            'Curp' => 'MAHJ660317MOCRRS07',
            'Nombre' => 'JOSEFA PATRICIA',
            'ApPaterno'=> 'MARTINEZ',
            'ApMaterno' => 'HERNANDEZ',
            'RfC' => 'MAHJ6603173L3',
            'Clave_Cobro' => '2702E4863000060163', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'MA',
            'Perfil' => 'MAESTRA EN ADMINISTRACIÓN',
            'Fecha_ingreso' => '1992-11-01' , 
            'Fecha_ingreso_DGETI' => '1992-11-01',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '307',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4863000060163',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'rosinela.jimenez.20@dgeti.sems.gob.mx',
            'Curp' => 'JIPR640309MCSMRS03',
            'Nombre' => 'ROSINELA',
            'ApPaterno'=> 'JIMENEZ',
            'ApMaterno' => 'PEREZ',
            'RfC' => 'JIPR640309H52',
            'Clave_Cobro' => '2702E4863000060223', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'MIE',
            'Perfil' => 'MAESTRÍA EN INVESTIGACIÓN EDUCATIVA',
            'Fecha_ingreso' => '1988-10-01' , 
            'Fecha_ingreso_DGETI' => '1988-10-01',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '308',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4863000060223',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'miguel.hernandez@cbtis248.edu.mx',
            'Curp' => 'HEVM721117HVZRZG06',
            'Nombre' => 'MIGUEL',
            'ApPaterno'=> 'HERNÁNDEZ',
            'ApMaterno' => 'VIAZCÁN',
            'RfC' => 'HEVM7211179Y5',
            'Clave_Cobro' => '2701E4863000000194', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'L.I.',
            'Perfil' => 'Licenciado en Informática',
            'Fecha_ingreso' => '2000-03-16' , 
            'Fecha_ingreso_DGETI' => '2000-03-16',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '306',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2701E4863000000194',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'gomezgarciaalberto7@gmail.com',
            'Curp' => 'GOGA571219HOCMRL07',
            'Nombre' => 'ALBERTO',
            'ApPaterno'=> 'GÓMEZ',
            'ApMaterno' => 'GARCÍA',
            'RfC' => 'GOGA571219CY5',
            'Clave_Cobro' => '2701E4863000272570', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'Ing.',
            'Perfil' => 'ING. CIVIL EN VÍAS TERRESTRES',
            'Fecha_ingreso' => '1988-01-01' , 
            'Fecha_ingreso_DGETI' => '1988-01-01',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '305',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2701E4863000272570',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'agomezluis40@gmail.com',
            'Curp' => 'GOLH640706MOCMSL07',
            'Nombre' => 'HELADIO ANTONIO',
            'ApPaterno'=> 'GÓMEZ',
            'ApMaterno' => 'LUIS',
            'RfC' => 'GOLH640706M14',
            'Clave_Cobro' => '2702E4829000272232', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'Ing',
            'Perfil' => 'ING. INDUSTRIAL ELÉCTRICO',
            'Fecha_ingreso' => '1994-09-01' , 
            'Fecha_ingreso_DGETI' => '1994-09-01',
            'Categoria' => 'Titular "B"',
            'Numero_Tarjeta' => '304',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4829000272232',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'adrianacbtis248@gmail.com',
            'Curp' => 'GAMA740703MOCRRD02',
            'Nombre' => 'ADRIANA',
            'ApPaterno'=> 'GARCÍA',
            'ApMaterno' => 'MARTÍNEZ',
            'RfC' => 'GAMA740703RY6',
            'Clave_Cobro' => '2702E4829000271351', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'MLA',
            'Perfil' => 'MAESTRÍA EN LINGÜÍSTICA APLICADA',
            'Fecha_ingreso' => '1997-09-01' , 
            'Fecha_ingreso_DGETI' => '1997-09-01',
            'Categoria' => 'Titular "B"',
            'Numero_Tarjeta' => '303',
            'Horas_Nom' => 40,
            'Numero_Plaza' => '2702E4829000271351',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'carlos.betanzos.cb248@dgeti.sems.gob.mx',
            'Curp' => 'BEJC750424HOCTMR02',
            'Nombre' => 'CARLOS',
            'ApPaterno'=> 'BETANZOS',
            'ApMaterno' => 'JIMENEZ',
            'RfC' => 'BEJC7504247W0',
            'Clave_Cobro' => '2702E4523120060006', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'LSC',
            'Perfil' => 'Licenciado en Sistemas Computacionales',
            'Fecha_ingreso' => '2005-04-01' , 
            'Fecha_ingreso_DGETI' => '2005-04-01',
            'Categoria' => 'Asignatura "C"',
            'Numero_Tarjeta' => '302',
            'Horas_Nom' => 12,
            'Numero_Plaza' => '2702E4523120060006',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);
            
            User:: create([
            'email' => 'bautistaperezbe@gmail.com',
            'Curp' => 'BAPB680709MPLTRL14',
            'Nombre' => 'BLANCA ESTELA',
            'ApPaterno'=> 'BAUTISTA',
            'ApMaterno' => 'PÉREZ',
            'RfC' => 'BAPB680709QU3',
            'Clave_Cobro' => '2702E4761000270549', 
            'Puesto' => 'Docente',
            'Perfil_A' => 'LAE',
            'Perfil' => 'LIC. EN ADMINISTRACIÓN DE EMPRESAS',
            'Fecha_ingreso' => '1996-04-16' , 
            'Fecha_ingreso_DGETI' => '1996-04-16',
            'Categoria' => 'Titular "C"',
            'Numero_Tarjeta' => '300',
            'Horas_Nom' => 30,
            'Numero_Plaza' => '2702E4761000270549',
            'Tipo' => 'No Usuario',
            'Observaciones'=> 'Sin Observaciones',
            'Estatus' => 'Activo',
            'EstatusUser'=> 'Activo'
            ]);

    }
}