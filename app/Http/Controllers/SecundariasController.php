<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecundariasController extends Controller
{
    public function secundaria()
    {
        return view('secundarias.index');
    }
}
