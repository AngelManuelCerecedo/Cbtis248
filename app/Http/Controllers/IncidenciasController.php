<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Incidencia;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class IncidenciasController extends Controller
{
    public function incidencia()
    {
        return view('incidencias.index');
    }
    public function lincidencia($id)
    {
        return view('incidencias.Lincidencia', ['id' => $id]);
    }

    public function citatorio($id)
    {

        $incidencia = Incidencia::Where([['id', '=', $id]])->first();
        $ProfesorO = User::Where([['Puesto', 'like', '%' . 'Orientador Educativo' . '%'], ['Estatus', '=', 'Activo']])->first();
        $g = ''; $m='';
        $dia = date('z');
        $mes = date('n');
        $año = date('Y');
        $date = date_create($incidencia->Fecha_C);
        $nd = date_format($date,"d");
        $dc = date_format($date,"N");
        $mc = date_format($date,"n");

        if ($dc == 1){$dc = 'LUNES';}
        if ($dc == 2){$dc = 'MARTES';}
        if ($dc == 3){$dc = 'MIERCOLES';}
        if ($dc == 4){$dc = 'JUEVES';}
        if ($dc == 5){$dc = 'VIERNES';}
        if ($dc == 6){$dc = 'SABADO';}
        if ($dc == 7){$dc = 'DOMINGO';}

        if ($mc == 1){$mc = 'Enero';}
        if ($mc == 2){$mc = 'Febrero';}
        if ($mc == 3){$mc = 'Marzo';}
        if ($mc == 4){$mc = 'Abril';}
        if ($mc == 5){$mc = 'Mayo';}
        if ($mc == 6){$mc = 'Junio';}
        if ($mc == 7){$mc = 'Julio';}
        if ($mc == 8){$mc = 'Agosto';}
        if ($mc == 9){$mc = 'Septiembre';}
        if ($mc == 10){$mc = 'Octubre';}
        if ($mc == 11){$mc = 'Noviembre';}
        if ($mc == 12){$mc = 'Diciembre';}

        if ($incidencia->alumno->grado_id == 1){$g = 'Primer';}
        if ($incidencia->alumno->grado_id == 2){$g = 'Segundo';}
        if ($incidencia->alumno->grado_id == 3){$g = 'Tercer';}
        if ($incidencia->alumno->grado_id == 4){$g = 'Cuarto';}
        if ($incidencia->alumno->grado_id == 5){$g = 'Quinto';}
        if ($incidencia->alumno->grado_id == 6){$g = 'Sexto';}

        if ($mes == 1){$m = 'Enero';}
        if ($mes == 2){$m = 'Febrero';}
        if ($mes == 3){$m = 'Marzo';}
        if ($mes == 4){$m = 'Abril';}
        if ($mes == 5){$m = 'Mayo';}
        if ($mes == 6){$m = 'Junio';}
        if ($mes == 7){$m = 'Julio';}
        if ($mes == 8){$m = 'Agosto';}
        if ($mes == 9){$m = 'Septiembre';}
        if ($mes == 10){$m = 'Octubre';}
        if ($mes == 11){$m = 'Noviembre';}
        if ($mes == 12){$m = 'Diciembre';}
        $pdf = PDF::loadView('pdfs.Citatorio', [
            'incidencia' => $incidencia,
            'profesorO' => $ProfesorO,
            'dia' => $dia+1,
            'mes' => $m,
            'año' => $año,
            'g' => $g,
            'dc' => $dc,
            'mc' => $mc,
            'nd' => $nd,
        ]);

        $pdf->setPaper('letter','landscape');
         return $pdf->download('Citatorio-'.$incidencia->alumno->Nombre.$incidencia->alumno->ApPaterno.$incidencia->alumno->ApMaterno.'.pdf');
    }
    public function citatorioG($id)
    {

        $incidencia = Incidencia::Where([['id', '=', $id]])->first();
        $ProfesorO = User::Where([['Puesto', 'like', '%' . 'Orientador Educativo' . '%'], ['Estatus', '=', 'Activo']])->first();
        $g = ''; $m='';
        $dia = date('z');
        $mes = date('n');
        $año = date('Y');
        $date = date_create($incidencia->Fecha_C);
        $nd = date_format($date,"d");
        $dc = date_format($date,"N");
        $mc = date_format($date,"n");

        if ($dc == 1){$dc = 'LUNES';}
        if ($dc == 2){$dc = 'MARTES';}
        if ($dc == 3){$dc = 'MIERCOLES';}
        if ($dc == 4){$dc = 'JUEVES';}
        if ($dc == 5){$dc = 'VIERNES';}
        if ($dc == 6){$dc = 'SABADO';}
        if ($dc == 7){$dc = 'DOMINGO';}

        if ($mc == 1){$mc = 'Enero';}
        if ($mc == 2){$mc = 'Febrero';}
        if ($mc == 3){$mc = 'Marzo';}
        if ($mc == 4){$mc = 'Abril';}
        if ($mc == 5){$mc = 'Mayo';}
        if ($mc == 6){$mc = 'Junio';}
        if ($mc == 7){$mc = 'Julio';}
        if ($mc == 8){$mc = 'Agosto';}
        if ($mc == 9){$mc = 'Septiembre';}
        if ($mc == 10){$mc = 'Octubre';}
        if ($mc == 11){$mc = 'Noviembre';}
        if ($mc == 12){$mc = 'Diciembre';}

        if ($incidencia->grupo->grado_id == 1){$g = 'Primer';}
        if ($incidencia->grupo->grado_id == 2){$g = 'Segundo';}
        if ($incidencia->grupo->grado_id == 3){$g = 'Tercer';}
        if ($incidencia->grupo->grado_id == 4){$g = 'Cuarto';}
        if ($incidencia->grupo->grado_id == 5){$g = 'Quinto';}
        if ($incidencia->grupo->grado_id == 6){$g = 'Sexto';}

        if ($mes == 1){$m = 'Enero';}
        if ($mes == 2){$m = 'Febrero';}
        if ($mes == 3){$m = 'Marzo';}
        if ($mes == 4){$m = 'Abril';}
        if ($mes == 5){$m = 'Mayo';}
        if ($mes == 6){$m = 'Junio';}
        if ($mes == 7){$m = 'Julio';}
        if ($mes == 8){$m = 'Agosto';}
        if ($mes == 9){$m = 'Septiembre';}
        if ($mes == 10){$m = 'Octubre';}
        if ($mes == 11){$m = 'Noviembre';}
        if ($mes == 12){$m = 'Diciembre';}
        $pdf = PDF::loadView('pdfs.CitatorioG', [
            'incidencia' => $incidencia,
            'profesorO' => $ProfesorO,
            'dia' => $dia+1,
            'mes' => $m,
            'año' => $año,
            'g' => $g,
            'dc' => $dc,
            'mc' => $mc,
            'nd' => $nd,
        ]);

        $pdf->setPaper('letter','landscape');
         return $pdf->download('Citatorio-'.$incidencia->grupo->Clave_Grupo.'.pdf');
    }
}
