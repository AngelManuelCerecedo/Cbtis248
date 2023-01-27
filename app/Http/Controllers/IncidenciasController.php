<?php

namespace App\Http\Controllers;

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


        //aqui va varibles y consultas

        $pdf = PDF::loadView('pdfs.Citatorio', [
            //varibles para pasar a la vista
        ]);

        $pdf->setPaper('letter','landscape');
         return $pdf->download('Citatorio-'..'.pdf');
    }
}
