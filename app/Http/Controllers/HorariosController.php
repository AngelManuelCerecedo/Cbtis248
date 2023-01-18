<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function horario()
    {
        return view('horarios.index');
    }
    public function horarioM($id){
        return view('horarios.chprofesor', ['id' => $id]);
    }
    public function horarioV($id){
        return view('horarios.vhprofesor', ['id' => $id]);
    }
    public function horarioG()
    {
        return view('horarios.indexG');
    }
    public function horarioGR($id){
        return view('horarios.chalumno', ['id' => $id]);
    }
}
