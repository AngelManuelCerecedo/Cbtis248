<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = Role::create(['name' => 'SuperAdministrador']);
        $admin = Role::create(['name' => 'Administrador']);
        $dir = Role::create(['name' => 'Director']);
        $OE = Role::create(['name' => 'Orientador Educativo']);
        $CE = Role::create(['name' => 'Servicios Escolares']);
        $CD = Role::create(['name' => 'Servicios Docente']);


        //Dashboard
        $permission = Permission::create(['name' => 'dashboard', 'description' => 'Dashboard'])->syncRoles([$root, $admin, $dir,$OE, $CE, $CD]);

        //Opciones del menu
        //Control escolar
        Permission::create(['name' => 'Control-Escolar', 'description' => 'Acceder a Control Escolar '])->syncRoles([$root, $admin, $dir,$OE,$CE]);
        //Alumnos
        Permission::create(['name' => 'Alumnos', 'description' => 'Acceder a Alumnos '])->syncRoles([$root, $admin, $dir,$CE]);
        Permission::create(['name' => 'Registrar-Alumnos', 'description' => 'Registrar Alumnos'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Editar-Alumnos', 'description' => 'Editar información de Alumnos'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Eliminar-Alumnos', 'description' => 'Eliminar información de Alumnos'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Informacion-Alumnos', 'description' => 'Visualizar información de Alumnos '])->syncRoles([$root, $admin, $dir,$CE]);

        //Tutores
        Permission::create(['name' => 'Tutores', 'description' => 'Acceder a Tutores '])->syncRoles([$root, $admin, $dir,$CE]);
        Permission::create(['name' => 'Registrar-Tutores', 'description' => 'Registrar Tutores'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Editar-Tutores', 'description' => 'Editar información de Tutoress'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Eliminar-Tutores', 'description' => 'Eliminar información de Tutores'])->syncRoles([$root, $admin,$CE]);

        //Secundarias
        Permission::create(['name' => 'Secundarias', 'description' => 'Acceder a Secundarias '])->syncRoles([$root, $admin, $dir,$CE]);
        Permission::create(['name' => 'Registrar-Secuindarias', 'description' => 'Registrar Secundarias'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Editar-Secundarias', 'description' => 'Editar información de Secundarias'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Eliminar-Secundarias', 'description' => 'Eliminar información de Secundarias'])->syncRoles([$root, $admin,$CE]);

        //incidencias
        Permission::create(['name' => 'Incidencias', 'description' => 'Acceder a Incidencias '])->syncRoles([$root, $admin, $dir,$OE,$CE]);
        Permission::create(['name' => 'Registrar-Incidencias', 'description' => 'Registrar Incidencias'])->syncRoles([$root, $admin,$OE]);
        Permission::create(['name' => 'Listar-Incidencias', 'description' => 'Ver Incidencias'])->syncRoles([$root, $admin, $dir,$OE,$CE]);

        Permission::create(['name' => 'Editar-Incidencias', 'description' => 'Editar Incidencias'])->syncRoles([$root, $admin,$OE]);
        Permission::create(['name' => 'Generar-Citatorio', 'description' => 'Generar citatorio'])->syncRoles([$root, $admin, $dir,$OE]);
        Permission::create(['name' => 'Eliminar-Incidencias', 'description' => 'Eliminar Incidencias'])->syncRoles([$root, $admin,$OE]);




        //Personal
        Permission::create(['name' => 'Personal', 'description' => 'Acceder a Personal '])->syncRoles([$root, $admin, $dir,$CD]);

        //Personal
        Permission::create(['name' => 'Personal-Catalogo', 'description' => 'Catálogo de Personal '])->syncRoles([$root, $admin, $dir,$CD]);
        Permission::create(['name' => 'Registrar-Personal', 'description' => 'Registrar Personal'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Editar-Personal', 'description' => 'Editar información del Personal'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Eliminar-Personal', 'description' => 'Eliminar información del Personal'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Informacion-Personal', 'description' => 'Visualizar información del Personal '])->syncRoles([$root, $admin, $dir,$CD]);

        //Horarios
        Permission::create(['name' => 'Horarios', 'description' => 'Acceder a Horarios'])->syncRoles([$root, $admin, $dir,$CD]);

        //Horario Docente
        Permission::create(['name' => 'Horario-Docente', 'description' => 'Acceder a Horarios de Docentes'])->syncRoles([$root, $admin, $dir,$CD]);
        Permission::create(['name' => 'Registrar-Horario-Docente', 'description' => 'Registrar Horario de Docentes'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Imprimir-Horario-Docente', 'description' => 'Imprimir Horario de Docentes'])->syncRoles([$root, $admin, $dir,$CD]);
        Permission::create(['name' => 'Eliminar-Horario-Docente', 'description' => 'Eliminar Horario de Docentes'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Ver-Horario-Docentes', 'description' => 'Ver Horario de Docentes'])->syncRoles([$root, $admin, $dir,$CD]);

        //Horario Grupo
        Permission::create(['name' => 'Horario-Grupos', 'description' => 'Acceder a Horarios de Grupos'])->syncRoles([$root, $admin, $dir,$CE,$CD]);
        Permission::create(['name' => 'Imprimir-Horario-Grupos', 'description' => 'Imprimir Horario de Grupos'])->syncRoles([$root, $admin, $dir,$CE,$CD]);
        Permission::create(['name' => 'Ver-Horario-Grupos', 'description' => 'Ver Horario de Grupos'])->syncRoles([$root, $admin, $dir,$CE,$CD]);


        //Materias
        Permission::create(['name' => 'Materias', 'description' => 'Acceder a Materias '])->syncRoles([$root, $admin, $dir,$CD]);

        //Materias
        Permission::create(['name' => 'Ver-Materias', 'description' => 'Catálogo de Materias'])->syncRoles([$root, $admin, $dir,$CD]);
        Permission::create(['name' => 'Registrar-Materia', 'description' => 'Registrar Materias'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Editar-Materia', 'description' => 'Editar Materias'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Eliminar-Materia', 'description' => 'Eliminar Materias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Asignar-Docente-Materia', 'description' => 'Asignar Docentes a Materias'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Desasignar-Docente-Materia', 'description' => 'Desasignar Docentes a Materias'])->syncRoles([$root, $admin,$CD]);

        //Actividades Complementarias
        Permission::create(['name' => 'Ver-Actividades-Complementarias', 'description' => 'Catálogo de Actividades Completarias'])->syncRoles([$root, $admin, $dir,$CD]);
        Permission::create(['name' => 'Registrar-Actividad-Complementaria', 'description' => 'Registrar Actividades Complementarias'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Editar-Actividad-Complementaria', 'description' => 'Editar Actividades Complementarias'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Eliminar-Actividad-Complementaria', 'description' => 'Eliminar Actividades Complementarias'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Asignar-Docente-Actividad-Complementario', 'description' => 'Asignar Docentes a Actividades Complementarias'])->syncRoles([$root, $admin,$CD]);
        Permission::create(['name' => 'Desasignar-Docente-Actividad-Complementaria', 'description' => 'Desasignar Docentes a Actividades Complementarias'])->syncRoles([$root, $admin,$CD]);

        //Grupos
        Permission::create(['name' => 'Grupos', 'description' => 'Acceder a Grupos '])->syncRoles([$root, $admin, $dir,$CE]);
        Permission::create(['name' => 'Ver-Grupos', 'description' => 'Catálogo de Grupos'])->syncRoles([$root, $admin, $dir,$CE]);
        Permission::create(['name' => 'Registrar-Grupo', 'description' => 'Registrar Grupos'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Añadir-Alumnos', 'description' => 'Añadir alumnos a Grupos'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Listar-Alumnos', 'description' => 'Consultar alumnos por Grupos'])->syncRoles([$root, $admin,$dir,$CE]);
        Permission::create(['name' => 'Editar-Grupo', 'description' => 'Editar información de Grupos'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Actualizar-Grados', 'description' => 'Actualizar Grados'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Eliminar-Grupos', 'description' => 'Eliminar información de Grupos'])->syncRoles([$root, $admin,$CE]);

        //Ciclo Escolar
        Permission::create(['name' => 'Ciclo-Escolar', 'description' => 'Acceder a Ciclos Escolares '])->syncRoles([$root, $admin, $dir,$CE]);
        Permission::create(['name' => 'Ver-Ciclo-Escolar', 'description' => 'Catálogo de Ciclos Escolares'])->syncRoles([$root, $admin, $dir,$CE]);
        Permission::create(['name' => 'Registrar-Ciclo-Escolar', 'description' => 'Registrar Ciclos Escolares'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Editar-Ciclo-Escolar', 'description' => 'Editar Ciclos Escolares'])->syncRoles([$root, $admin,$CE]);
        Permission::create(['name' => 'Eliminar-Ciclo-Escolar', 'description' => 'Eliminar Ciclos Escolares'])->syncRoles([$root, $admin,$CE]);

        //Usuarios
        Permission::create(['name' => 'Usuarios', 'description' => 'Acceder a Usuarios'])->syncRoles([$root]);
        //Gestionar Usuarios
        Permission::create(['name' => 'Ver-Usuarios', 'description' => 'Catálogo de Usuarios'])->syncRoles([$root]);
        Permission::create(['name' => 'Registrar-Usuarios', 'description' => 'Registrar Usuarios '])->syncRoles([$root]);
        Permission::create(['name' => 'Editar-Usuarios', 'description' => 'Editar Usuarios'])->syncRoles([$root]);
        Permission::create(['name' => 'Asignar-Roles', 'description' => 'Asignar Roles'])->syncRoles([$root]);
    }
}
