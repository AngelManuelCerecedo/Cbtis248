<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PadresController;
use App\Http\Controllers\SecundariasController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\MateriasController;
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
    return view('/dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// RUTAS DEL CONTROL ESCOLAR

Route::get('Alumnos',[AlumnosController::class,'alumno'])->name('Alumnos');
Route::get('Alumnos/Formulario',[AlumnosController::class,'ralumno'])->name('RAlumno');
Route::get('Alumnos/Editar/{id}',[AlumnosController::class,'ealumno'])->name('EAlumno');
Route::get('Padres',[PadresController::class,'padre'])->name('Padres');
Route::get('Secundarias',[SecundariasController::class,'secundaria'])->name('Secundarias');
Route::get('Incidencias',[IncidenciasController::class,'incidencia'])->name('Incidencias');

// RUTAS DEL PERSONAL

Route::get('Profesores',[PersonalController::class,'Bpersonal'])->name('BuscarPersonal');
Route::get('Profesores/Editar/{id}',[PersonalController::class,'Epersonal'])->name('EPersonal');
Route::get('Profesores/Formulario',[PersonalController::class,'Rpersonal'])->name('RegistrarPersonal');

// RUTAS DE LAS MATERIAS

Route::get('Materias',[MateriasController::class,'materia'])->name('Materias');

// RUTAS DE LAS ACTIVIDADES COMPLEMENTARIAS

Route::get('ActividadesComplementarias',[ActividadController::class,'actividad'])->name('Actividades');