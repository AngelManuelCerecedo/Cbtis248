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

Route::get('Alumnos',[AlumnosController::class,'alumno'])->middleware('can:Alumnos')->name('Alumnos');
Route::get('Alumnos/Formulario',[AlumnosController::class,'ralumno'])->middleware('can:Registrar-Alumnos')->name('RAlumno');
Route::get('Alumnos/Editar/{id}',[AlumnosController::class,'ealumno'])->middleware('can:Editar-Alumnos')->name('EAlumno');
Route::get('Padres',[PadresController::class,'padre'])->middleware('can:Tutores')->name('Padres');
Route::get('Secundarias',[SecundariasController::class,'secundaria'])->middleware('can:Secundarias')->name('Secundarias');
Route::get('Incidencias',[IncidenciasController::class,'incidencia'])->middleware('can:Incidencias')->name('Incidencias');
Route::get('ListadoIncidencias/{id}',[IncidenciasController::class,'lincidencia'])->middleware('can:Listar-Incidencias')->name('Lincidencias');


// RUTAS DEL PERSONAL

// Route::get('Profesores',[PersonalController::class,'Bpersonal'])->middleware('can:Personal-Catalogo')->name('BuscarPersonal');
// Route::get('Profesores/Formulario',[PersonalController::class,'Rpersonal'])->name('RegistrarPersonal');
// Route::get('Profesores/Editar/{id}',[PersonalController::class,'Epersonal'])->name('EditarPersonal');

Route::get('Administradores',[AdministradoresController::class,'Badministrador'])->middleware('can:Personal-Catalogo')->name('BuscarAdministrador');
Route::get('Administradores/Formulario',[AdministradoresController::class,'Radministrador'])->middleware('can:Registrar-Personal')->name('RegistrarAdministrador');
Route::get('Administradores/Editar/{id}',[AdministradoresController::class,'Eadministrador'])->middleware('can:Editar-Personal')->name('EditarAdministrador');

// RUTAS DE LAS MATERIAS

Route::get('Materias',[MateriasController::class,'materia'])->middleware('can:Ver-Materias')->name('Materias');

// RUTAS DE LAS ACTIVIDADES COMPLEMENTARIAS

Route::get('ActividadesComplementarias',[ActividadController::class,'actividad'])->middleware('can:Ver-Actividades-Complementarias')->name('Actividades');

// GRUPOS
Route::get('Grupos',[GruposController::class,'grupo'])->middleware('can:Ver-Grupos')->name('Grupos');

// HORARIOS
Route::get('Horarios',[HorariosController::class,'horario'])->middleware('can:Horario-Docente')->name('Horarios');
Route::get('Horarios/Materias/{id}',[HorariosController::class,'horarioM'])->middleware('can:Registrar-Horario-Docente')->name('HorariosM');
Route::get('Horarios/Tentativo',[HorariosController::class,'horarioT'])->middleware('can:Horario-Tentativo-Docente')->name('HorariosT');
Route::get('Horarios/Tentativo/Materias/{id}',[HorariosController::class,'horarioTT'])->middleware('can:Registrar-Horario-Docente')->name('HorariosTT');
Route::get('Horarios/{id}',[HorariosController::class,'horarioV'])->middleware('can:Ver-Horario-Docentes')->name('HorariosV');

//PDF
//Horarios Profesores
Route::get('Horarios/Profesor/Personal/{id}',[HorariosController::class,'horariosP'])->name('HorariosP');
Route::get('Horarios/Profesor/Oficial/{id}',[HorariosController::class,'horariosO'])->name('horariosO');
//Horarios Grupos
Route::get('Horarios/Grupos/{id}',[HorariosController::class,'horariosG'])->name('horariosG');
//Citatorio
Route::get('Citatorio/{id}',[IncidenciasController::class,'citatorio'])->name('citatorio');

Route::get('HorariosG',[HorariosController::class,'horarioG'])->middleware('can:Horario-Grupos')->name('HorariosG');
Route::get('HorariosG/{id}',[HorariosController::class,'horarioVG'])->middleware('can:Ver-Horario-Grupos')->name('HorariosVG');

//CICLO ESCOLAR
Route::get('Ciclo',[CicloController::class,'ciclo'])->middleware('can:Ver-Ciclo-Escolar')->name('Ciclo');


//USUARIOS
Route::resource('Usuarios',UserController::class)->middleware('can:Ver-Usuarios')->names('Usuarios');
