<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $fillable=['id','Clave_Grupo','Turno','Especialidad','Salon','grado_id','ciclo_id'];
    public function alumno(){
        return $this->hasMany("App\Models\Alumno");
    }
    public function cicloesc(){
        return $this->belongsTo("App\Models\CicloEscolar");
    }
    public function grado(){
        return $this->belongsTo("App\Models\Grado");
    }
    public function materia(){
        return $this->belongsToMany("App\Models\Materia");
    }
    public function horarioalu(){
        return $this->belongsTo("App\Models\horarioAlumno");
    }
}

