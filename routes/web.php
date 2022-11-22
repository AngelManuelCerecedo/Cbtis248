<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PersonalController;
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

// RUTAS DE ALUMNOS

Route::get('alumnos/catalogo',[AlumnosController::class,'Balumno'])->name('BuscarAlumnos');
Route::get('alumnos/registro',[AlumnosController::class,'Ralumno'])->name('RegistrarAlumnos');
Route::get('alumnos/incidencia',[AlumnosController::class,'Cincidencia'])->name('Cincidencia');

// RUTAS DEL PERSONAL

Route::get('personal/catalogo',[PersonalController::class,'Bpersonal'])->name('BuscarPersonal');
Route::get('personal/registro',[PersonalController::class,'Rpersonal'])->name('RegistrarPersonal');

// RUTAS DE LAS MATERIAS

Route::get('materias/catalogo',[MateriasController::class,'Bmateria'])->name('BuscarMaterias');
Route::get('materias/registro',[MateriasController::class,'Rmateria'])->name('RegistrarMaterias');

// RUTAS DE LAS ACTIVIDADES COMPLEMENTARIAS

Route::get('actividad/catalogo',[ActividadController::class,'Bactividad'])->name('BuscarActividades');
Route::get('actividad/registro',[ActividadController::class,'Ractividad'])->name('RegistrarActividades');