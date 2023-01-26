<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CicloController extends Controller
{
    public function ciclo(){
        return view('ciclos.index');
    }    
}
