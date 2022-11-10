<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    public function alumno(){
        return $this->hasMany("App\Models\Alumno");
    }
    public function grupo(){
        return $this->hasMany("App\Models\Grupo");
    }
    public function materia(){
        return $this->hasMany("App\Models\Materia");
    }
}
