<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function Bmateria(){
        return view('materias.Bmateria');
    }
    public function Rmateria(){
        return view('materias.Rmateria');
    }
}
