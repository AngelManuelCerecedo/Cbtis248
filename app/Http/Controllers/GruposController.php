<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{
    public function grupo()
    {
        return view('grupos.index');
    }
    public function grupoL()
    {
        return view('grupos.indexL');
    }
    public function lincidencia($id)
    {
        return view('grupos.lincidencia-g', ['id' => $id]);
    }
}
