<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicloEscolar extends Model
{
    use HasFactory;
    public function incidencia(){
        return $this->hasMany("App\Models\Incidencia");
    }
    public function grupo(){
        return $this->hasMany("App\Models\Grupo");
    }
    public function horarioalu(){
        return $this->hasMany("App\Models\HorarioAlumno");
    }
    public function horarioprof(){
        return $this->hasMany("App\Models\HorarioProfesor");
    }
    public function horarioof(){
        return $this->hasMany("App\Models\HorarioOficial");
    }
}
