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


        //Dashboard
        $permission = Permission::create(['name' => 'dashboard', 'description' => 'Dashboard'])->syncRoles([$root, $admin, $dir]);

        //Opciones del menu
        //Control escolar
        Permission::create(['name' => 'Control-Escolar', 'description' => 'Acceder a Control Escolar '])->syncRoles([$root, $admin, $dir]);
        //Alumnos
        Permission::create(['name' => 'Alumnos', 'description' => 'Acceder a Alumnos '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Alumnos', 'description' => 'Registrar Alumnos'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Alumnos', 'description' => 'Editar información de Alumnos'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Alumnos', 'description' => 'Eliminar información de Alumnos'])->syncRoles([$root, $admin]);

        //Tutores
        Permission::create(['name' => 'Tutores', 'description' => 'Acceder a Tutores '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Tutores', 'description' => 'Registrar Tutores'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Tutores', 'description' => 'Editar información de Tutoress'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Tutores', 'description' => 'Eliminar información de Tutores'])->syncRoles([$root, $admin]);

        //Secundarias
        Permission::create(['name' => 'Secundarias', 'description' => 'Acceder a Secundarias '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Secuindarias', 'description' => 'Registrar Secundarias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Secundarias', 'description' => 'Editar información de Secundarias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Secundarias', 'description' => 'Eliminar información de Secundarias'])->syncRoles([$root, $admin]);

        //incidencias
        Permission::create(['name' => 'Incidencias', 'description' => 'Acceder a Incidencias '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Incidencias', 'description' => 'Registrar Incidencias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Listar-Incidencias', 'description' => 'Ver Incidencias'])->syncRoles([$root, $admin, $dir]);


        //Personal
        Permission::create(['name' => 'Personal', 'description' => 'Acceder a personal '])->syncRoles([$root, $admin, $dir]);
        //Profesores
        Permission::create(['name' => 'Profesores', 'description' => 'Acceder a Profesores '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Profesores', 'description' => 'Registrar Profesores'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Profesores', 'description' => 'Editar información de Profesores'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Profesores', 'description' => 'Eliminar información de Profesores'])->syncRoles([$root, $admin]);

        //Administrativos
        Permission::create(['name' => 'Administrativos', 'description' => 'Acceder a Administrativos '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Administrativos', 'description' => 'Registrar Administrativos'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Administrativos', 'description' => 'Editar información de Administrativos'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Administrativos', 'description' => 'Eliminar información de Administrativos'])->syncRoles([$root, $admin]);


        //Horarios
        Permission::create(['name' => 'Horarios', 'description' => 'Acceder a Horarios'])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Horarios-Profesores', 'description' => 'Acceder a Horarios Profesores '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Horario-Profesor', 'description' => 'Registrar Horario de Profesores'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Horario-Profesor', 'description' => 'Editar Horario de Profesores'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Horario-Profesor', 'description' => 'Eliminar Horario de Profesores'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Ver-Horario-Profesor', 'description' => 'Ver Horario de Profesores'])->syncRoles([$root, $admin]);
        
        //Materias
        Permission::create(['name' => 'Materias', 'description' => 'Acceder a Materias '])->syncRoles([$root, $admin, $dir]);

        //Materias
        Permission::create(['name' => 'Ver-Materias', 'description' => 'Catálogo de Materias'])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Materia', 'description' => 'Registrar Materias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Materia', 'description' => 'Editar Materias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Materia', 'description' => 'Eliminar Materias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Asignar-Profesor-Materia', 'description' => 'Asignar Profesores a Materias'])->syncRoles([$root, $admin]);

        //Actividades Complementarias
        Permission::create(['name' => 'Ver-Actividades-Complementarias', 'description' => 'Catálogo de Actividades Completarias'])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Actividad-Complementaria', 'description' => 'Registrar Actividades Complementarias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Editar-Actividad-Complementaria', 'description' => 'Editar Actividades Complementarias'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Eliminar-Actividad-Complementaria', 'description' => 'Eliminar Actividades Complementarias'])->syncRoles([$root, $admin]);

        //Grupos
        Permission::create(['name' => 'Grupos', 'description' => 'Acceder a Grupos '])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Ver-Grupos', 'description' => 'Catálogo de Grupos'])->syncRoles([$root, $admin, $dir]);
        Permission::create(['name' => 'Registrar-Grupo', 'description' => 'Registrar Grupos'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Añadir-Alumnos', 'description' => 'Añadir alumnos a Grupos'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Listar-Alumnos', 'description' => 'Consultar alumnos por Grupos'])->syncRoles([$root, $admin]);
        Permission::create(['name' => 'Actualizar-Alumnos', 'description' => 'Actualizar Grados'])->syncRoles([$root, $admin]);


    }
}
