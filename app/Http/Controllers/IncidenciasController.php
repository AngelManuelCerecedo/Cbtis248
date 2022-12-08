<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
