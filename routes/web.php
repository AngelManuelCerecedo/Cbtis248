<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PadresController;
use App\Http\Controllers\SecundariasController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\CicloController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\UserController;
use App\Models\HorarioProfesor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', ['userid' => auth()->user()]);
    })->name('dashboard');
});

// RUTAS DEL CONTROL ESCOLAR

Route::get('Alumnos',[AlumnosController::class,'alumno'])->name('Alumnos');
Route::get('Alumnos/Formulario',[AlumnosController::class,'ralumno'])->name('RAlumno');
Route::get('Alumnos/Editar/{id}',[AlumnosController::class,'ealumno'])->name('EAlumno');
Route::get('Padres',[PadresController::class,'padre'])->name('Padres');
Route::get('Secundarias',[SecundariasController::class,'secundaria'])->name('Secundarias');
Route::get('Incidencias',[IncidenciasController::class,'incidencia'])->name('Incidencias');
Route::get('ListadoIncidencias/{id}',[IncidenciasController::class,'lincidencia'])->name('Lincidencias');


// RUTAS DEL PERSONAL

Route::get('Profesores',[PersonalController::class,'Bpersonal'])->name('BuscarPersonal');
Route::get('Profesores/Formulario',[PersonalController::class,'Rpersonal'])->name('RegistrarPersonal');
Route::get('Profesores/Editar/{id}',[PersonalController::class,'Epersonal'])->name('EditarPersonal');

Route::get('Administradores',[AdministradoresController::class,'Badministrador'])->name('BuscarAdministrador');
Route::get('Administradores/Formulario',[AdministradoresController::class,'Radministrador'])->name('RegistrarAdministrador');
Route::get('Administradores/Editar/{id}',[AdministradoresController::class,'Eadministrador'])->name('EditarAdministrador');

// RUTAS DE LAS MATERIAS

Route::get('Materias',[MateriasController::class,'materia'])->name('Materias');

// RUTAS DE LAS ACTIVIDADES COMPLEMENTARIAS

Route::get('ActividadesComplementarias',[ActividadController::class,'actividad'])->name('Actividades');

// GRUPOS
Route::get('Grupos',[GruposController::class,'grupo'])->name('Grupos');

// HORARIOS
Route::get('Horarios',[HorariosController::class,'horario'])->name('Horarios');
Route::get('Horarios/Materias/{id}',[HorariosController::class,'horarioM'])->name('HorariosM');
Route::get('Horarios/{id}',[HorariosController::class,'horarioV'])->name('HorariosV');

Route::get('HorariosG',[HorariosController::class,'horarioG'])->name('HorariosG');
Route::get('HorariosG/{id}',[HorariosController::class,'horarioVG'])->name('HorariosVG');

//CICLO ESCOLAR
Route::get('Ciclo',[CicloController::class,'ciclo'])->name('Ciclo');


//USUARIOS
Route::resource('Usuarios',UserController::class)->names('Usuarios');

//Roles