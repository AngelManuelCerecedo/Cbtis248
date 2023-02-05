<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'26' ,'Horas_Sem'=>'5' , 'Nombre'=>'ADOPTA LA FILOSOFÍA DEL SERVICIO EN LOS ESTABLECIMIENTOS DE HOSPEDAJE'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'7' , 'Nombre'=>'APLICA ESTRUCTURAS DE CONTROL CON UN LENGUAJE DE PROGRAMACIÓN'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'5' , 'Nombre'=>'APLICA ESTRUCTURAS DE DATOS CON UN LENGUAJE DE PROGRAMACIÓN'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'4' ,'grupo_id'=>'4' ,'Horas_Sem'=>'7' , 'Nombre'=>'ASISTE EN LAS ACTIVIDADES DE CAPACITACIÓN PARA EL DESARROLLO DEL CAPITAL HUMANO '  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'4' ,'grupo_id'=>'28' ,'Horas_Sem'=>'11' , 'Nombre'=>'ATIENDE AL HUÉSPED DURANTE SU ALOJAMIENTO'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'26' ,'Horas_Sem'=>'8' , 'Nombre'=>'BRINDA LOS SERVICIOS DE CONCIERGE (CONSERJE) Y PERSONAL UNIFORMADO'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'4' ,'grupo_id'=>'10' ,'Horas_Sem'=>'11' , 'Nombre'=>'BRINDA SOPORTE TÉCNICO A DISTANCIA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'4' ,'grupo_id'=>'10' ,'Horas_Sem'=>'6' , 'Nombre'=>'BRINDA SOPORTE TÉCNICO DE MANERA PRESENCIAL'  ,'Tipo'=>'Materia' ]);
       
        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'4' ,'grupo_id'=>'4' ,'Horas_Sem'=>'4' , 'Nombre'=>'CÁLCULO DIFERENCIAL'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'4' ,'grupo_id'=>'10' ,'Horas_Sem'=>'4' , 'Nombre'=>'CÁLCULO DIFERENCIAL'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'4' , 'Nombre'=>'CÁLCULO DIFERENCIAL'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'4' , 'Nombre'=>'CÁLCULO DIFERENCIAL'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'4' ,'grupo_id'=>'28' ,'Horas_Sem'=>'4' , 'Nombre'=>'CÁLCULO DIFERENCIAL'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'4' ,'grupo_id'=>'34' ,'Horas_Sem'=>'4' , 'Nombre'=>'CÁLCULO DIFERENCIAL'  ,'Tipo'=>'Materia' ]);
        
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'6' ,'grupo_id'=>'30' ,'Horas_Sem'=>'6' , 'Nombre'=>'COLABORA EN LA OPERACIÓN DE EVENTOS'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'6' ,'grupo_id'=>'30' ,'Horas_Sem'=>'6' , 'Nombre'=>'COLABORA EN LA OPERACIÓN DE EVENTOS'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'5' , 'Nombre'=>'CONSTRUYE ALGORITMOS PARA LA SOLUCIÓN DE PROBLEMAS'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'4' , 'Nombre'=>'CONSTRUYE PÁGINAS WEB'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'32' ,'Horas_Sem'=>'4' , 'Nombre'=>'CORTES DE VEGETALES, FRUTAS Y CARNES'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'6' , 'Nombre'=>'DESARROLLA APLICACIONES MOVILES PARA ANDROID'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'6' , 'Nombre'=>'DESARROLLA APLICACIONES MOVILES PARA IOS'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'6' , 'Nombre'=>'DESARROLLA APLICACIONES QUE SE EJECUTAN EN EL CLIENTE'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'7' , 'Nombre'=>'DESARROLLA APLICACIONES QUE SE EJECUTAN EN EL SERVIDOR'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'6' ,'grupo_id'=>'6' ,'Horas_Sem'=>'8' , 'Nombre'=>'DETERMINA LA NOMINA DEL PERSONAL TOMANDO N.L.'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'6' ,'grupo_id'=>'6' ,'Horas_Sem'=>'4' , 'Nombre'=>'DETERMINA REMUNERACIONES DEL PERSONAL SITU.EXT.'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'6' ,'grupo_id'=>'24' ,'Horas_Sem'=>'5' , 'Nombre'=>'DIBUJO TECNICO'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'5' , 'Nombre'=>'DIBUJO TECNICO'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'5' , 'Nombre'=>'DIBUJO TECNICO'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'2' ,'grupo_id'=>'2' ,'Horas_Sem'=>'10' , 'Nombre'=>'DISTINGUE LO DIFERENTES TIPOS DE EMPRESA POR SU GIRO, A.F. ,DOC. ADMON. Y REC.'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'4' ,'grupo_id'=>'4' ,'Horas_Sem'=>'4' , 'Nombre'=>'ECOLOGIA'  ,'Tipo'=>'Materia' ]);  
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'4' ,'grupo_id'=>'10' ,'Horas_Sem'=>'4' , 'Nombre'=>'ECOLOGIA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'4' , 'Nombre'=>'ECOLOGIA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'4' , 'Nombre'=>'ECOLOGIA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'4' ,'grupo_id'=>'28' ,'Horas_Sem'=>'4' , 'Nombre'=>'ECOLOGIA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'4' ,'grupo_id'=>'34' ,'Horas_Sem'=>'4' , 'Nombre'=>'ECOLOGIA'  ,'Tipo'=>'Materia' ]);

        
        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'2' ,'grupo_id'=>'2' ,'Horas_Sem'=>'7' , 'Nombre'=>'ELABORA ESTRATEGIAS PARA REALIZAR ACTIVIDADES DE SU AREA'  ,'Tipo'=>'Materia' ]);


        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'2' ,'grupo_id'=>'8' ,'Horas_Sem'=>'10' , 'Nombre'=>'ENSAMBLA E INSTALA CONTROLADORES Y DISPOSITIVOS PERIFERICOS'  ,'Tipo'=>'Materia' ]);

        
        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'4' ,'grupo_id'=>'4' ,'Horas_Sem'=>'10' , 'Nombre'=>'EVALUA EL DESEMPEÑO DE LA ORGANIZACION UTILIZANDO HERRAMIENTAS DE CALIDAD'  ,'Tipo'=>'Materia' ]);


        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'4' ,'grupo_id'=>'4' ,'Horas_Sem'=>'4' , 'Nombre'=>'FISICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'4' ,'grupo_id'=>'10' ,'Horas_Sem'=>'4' , 'Nombre'=>'FISICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'4' , 'Nombre'=>'FISICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'4' , 'Nombre'=>'FISICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'4' ,'grupo_id'=>'28' ,'Horas_Sem'=>'4' , 'Nombre'=>'FISICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'4' ,'grupo_id'=>'34' ,'Horas_Sem'=>'4' , 'Nombre'=>'FISICA'  ,'Tipo'=>'Materia' ]);

        

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'2' ,'grupo_id'=>'2' ,'Horas_Sem'=>'4' , 'Nombre'=>'GEOMETRÍA Y TRIGONOMETRÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'2' ,'grupo_id'=>'8' ,'Horas_Sem'=>'4' , 'Nombre'=>'GEOMETRÍA Y TRIGONOMETRÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'4' , 'Nombre'=>'GEOMETRÍA Y TRIGONOMETRÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'2' ,'grupo_id'=>'20' ,'Horas_Sem'=>'4' , 'Nombre'=>'GEOMETRÍA Y TRIGONOMETRÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'26' ,'Horas_Sem'=>'4' , 'Nombre'=>'GEOMETRÍA Y TRIGONOMETRÍA'  ,'Tipo'=>'Materia' ]);
        //Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'32' ,'Horas_Sem'=>'4' , 'Nombre'=>'GEOMETRÍA Y TRIGONOMETRÍA'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'2' ,'grupo_id'=>'2' ,'Horas_Sem'=>'4' , 'Nombre'=>'QUÍMICA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'2' ,'grupo_id'=>'8' ,'Horas_Sem'=>'4' , 'Nombre'=>'QUÍMICA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'4' , 'Nombre'=>'QUÍMICA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'2' ,'grupo_id'=>'20' ,'Horas_Sem'=>'4' , 'Nombre'=>'QUÍMICA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'26' ,'Horas_Sem'=>'4' , 'Nombre'=>'QUÍMICA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'32' ,'Horas_Sem'=>'4' , 'Nombre'=>'QUÍMICA II'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'6' ,'grupo_id'=>'6' ,'Horas_Sem'=>'5' , 'Nombre'=>'PROBABILIDAD Y ESTADÍSTICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'5' , 'Nombre'=>'PROBABILIDAD Y ESTADÍSTICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'5' , 'Nombre'=>'PROBABILIDAD Y ESTADÍSTICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'6' ,'grupo_id'=>'24' ,'Horas_Sem'=>'5' , 'Nombre'=>'PROBABILIDAD Y ESTADÍSTICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'6' ,'grupo_id'=>'30' ,'Horas_Sem'=>'5' , 'Nombre'=>'PROBABILIDAD Y ESTADÍSTICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'6' ,'grupo_id'=>'36' ,'Horas_Sem'=>'5' , 'Nombre'=>'PROBABILIDAD Y ESTADÍSTICA'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'2' ,'grupo_id'=>'2' ,'Horas_Sem'=>'5' , 'Nombre'=>'LECTURA, EXPRESIÓN ORAL Y ESCRITA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'2' ,'grupo_id'=>'8' ,'Horas_Sem'=>'5' , 'Nombre'=>'LECTURA, EXPRESIÓN ORAL Y ESCRITA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'5' , 'Nombre'=>'LECTURA, EXPRESIÓN ORAL Y ESCRITA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'26' ,'Horas_Sem'=>'5' , 'Nombre'=>'LECTURA, EXPRESIÓN ORAL Y ESCRITA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'2' ,'grupo_id'=>'20' ,'Horas_Sem'=>'5' , 'Nombre'=>'LECTURA, EXPRESIÓN ORAL Y ESCRITA II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'32' ,'Horas_Sem'=>'5' , 'Nombre'=>'LECTURA, EXPRESIÓN ORAL Y ESCRITA II'  ,'Tipo'=>'Materia' ]);


        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'6' ,'grupo_id'=>'6' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE ADMINISTRACIÓN'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE ADMINISTRACIÓN'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE ADMINISTRACIÓN'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'6' ,'grupo_id'=>'6' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FILOSOFÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FILOSOFÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FILOSOFÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'6' ,'grupo_id'=>'24' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FILOSOFÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'6' ,'grupo_id'=>'30' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FILOSOFÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'6' ,'grupo_id'=>'36' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FILOSOFÍA'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'6' ,'grupo_id'=>'6' ,'Horas_Sem'=>'5' , 'Nombre'=>'INTRODUCCIÓN A LA ECONOMÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'5' , 'Nombre'=>'INTRODUCCIÓN A LA ECONOMÍA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'5' , 'Nombre'=>'INTRODUCCIÓN A LA ECONOMÍA'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'2' ,'grupo_id'=>'2' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'2' ,'grupo_id'=>'8' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'2' ,'grupo_id'=>'20' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'26' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS II'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'32' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS II'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'4' ,'grupo_id'=>'4' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS IV'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'4' ,'grupo_id'=>'10' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS IV'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS IV'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS IV'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'4' ,'grupo_id'=>'28' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS IV'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'4' ,'grupo_id'=>'34' ,'Horas_Sem'=>'3' , 'Nombre'=>'INGLÉS IV'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'6' , 'Nombre'=>'INSTALA UNA RED LAN'  ,'Tipo'=>'Materia' ]);        
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'2' ,'grupo_id'=>'10' ,'Horas_Sem'=>'7' , 'Nombre'=>'INSTALA Y CONFIGURA SOFTWARE'  ,'Tipo'=>'Materia' ]);


        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'34' ,'Horas_Sem'=>'4' , 'Nombre'=>'MANEJO DE NORMAS DE HIGIENE Y SEGURIDAD EN P.A.B.'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'4' , 'Nombre'=>'MANTIENE EL SISTEMA DE EMISIONES CONTAMINANTES DEL AUTOMOVIL'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'6' ,'grupo_id'=>'24' ,'Horas_Sem'=>'7' , 'Nombre'=>'MANTIENE EL SISTEMA DE FRENOS DEL AUTOMOVIL'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'7' , 'Nombre'=>'MANTIENE EL SISTEMA DE INYECCIÓN ELECTRONICA DE LOS MOTORES DE GASOLINA Y DISEL'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'2' ,'grupo_id'=>'20' ,'Horas_Sem'=>'6' , 'Nombre'=>'MANTIENE EL SISTEMA ELECTRICO DEL AUTOMOVIL'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'2' ,'grupo_id'=>'20' ,'Horas_Sem'=>'11' , 'Nombre'=>'MANTIENE EL SISTEMA ELECTRICO DEL AUTOMOVIL'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'6' , 'Nombre'=>'MANTIENE EL SISTEMA DE ENCENDIDO ELECTRONICO Y COMPUTARIZADO DEL AUTOMOVIL'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'6' ,'grupo_id'=>'24' ,'Horas_Sem'=>'5' , 'Nombre'=>'MANTIENE LOS SISTEMAS DE SUSPENSION Y DIRECCIÓN DEL AUTOMOVIL'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'4' ,'grupo_id'=>'28' ,'Horas_Sem'=>'6' , 'Nombre'=>'OPERA SISTEMAS DE RESERVACIÓN'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'6' , 'Nombre'=>'OPERA UNA RED LAN'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'28' ,'Horas_Sem'=>'4' , 'Nombre'=>'ORGANIZA ACTIVIDADES DE ANIMACIÓN Y RECREACIÓN'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'6' ,'grupo_id'=>'36' ,'Horas_Sem'=>'5' , 'Nombre'=>'ORIGEN Y CLASIFICACIÓN DE LAS BEBIDAS'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'6' ,'grupo_id'=>'36' ,'Horas_Sem'=>'7' , 'Nombre'=>'pREPARA BEBIDAS Y COCTELES DE ACUERDO AL RECETARIO BASE'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'34' ,'Horas_Sem'=>'9' , 'Nombre'=>'PREPARA FONDOS, SALSAS MADRES Y DERIVADAS DEACUERDO AL RECETARIO BASE'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'4' ,'grupo_id'=>'32' ,'Horas_Sem'=>'8' , 'Nombre'=>'PREPARA PRODUCTOS DE PANADERIA DEACUERDO AL RECETARIO BASE'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'4' ,'grupo_id'=>'32' ,'Horas_Sem'=>'9' , 'Nombre'=>'PREPARA PRODUCTOS DE REPOSTERIA DEACUERDO AL RECETARIO BASE'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FISICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FISICA'  ,'Tipo'=>'Materia' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'6' ,'grupo_id'=>'24' ,'Horas_Sem'=>'5' , 'Nombre'=>'TEMAS DE FISICA'  ,'Tipo'=>'Materia' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'2' ,'grupo_id'=>'2' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'2' ,'grupo_id'=>'8' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'2' ,'grupo_id'=>'14' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA'  ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'2' ,'grupo_id'=>'20' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'2' ,'grupo_id'=>'26' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'2' ,'grupo_id'=>'32' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'4' ,'grupo_id'=>'4' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'4' ,'grupo_id'=>'10' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'4' ,'grupo_id'=>'16' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA'  ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'4' ,'grupo_id'=>'22' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'4' ,'grupo_id'=>'26' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'4' ,'grupo_id'=>'34' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);

        Materia::create(['especialidad_id'=>'1' ,'grado_id'=>'6' ,'grupo_id'=>'6' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'2' ,'grado_id'=>'6' ,'grupo_id'=>'12' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'3' ,'grado_id'=>'6' ,'grupo_id'=>'18' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA'  ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'4' ,'grado_id'=>'6' ,'grupo_id'=>'24' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'5' ,'grado_id'=>'6' ,'grupo_id'=>'30' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        Materia::create(['especialidad_id'=>'6' ,'grado_id'=>'6' ,'grupo_id'=>'36' ,'Horas_Sem'=>'2' , 'Nombre'=>'TUTORIA' ,'Tipo'=>'Actividad' ]);
        
    }
}
