<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{
    public function grupo()
    {
        return view('grupos.index');
    }
}
