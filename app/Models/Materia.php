<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable=['id','Nombre','Horas_Sem','Estatus','especialidad_id','grado_id','profesor_id'];
    public function grupo(){
        return $this->belongsToMany("App\Models\Grupo");
    }
    public function grado(){
        return $this->belongsTo("App\Models\Grado");
    }
    public function especialidad(){
        return $this->belongsTo("App\Models\Especialidad");
    }
    public function profesor(){
        return $this->belongsTo("App\Models\Profesor");
    }
    //public function Profesor(){
      //  return $this->belongsToMany("App\Models\Profesor")
        //->withTimestamps()->withPivot(['Hora', 'Dia']);
    //}



    public function horarioalu(){
        return $this->belongsToMany("App\Models\HorarioAlumno");
    }
    public function horarioprof(){
        return $this->belongsToMany("App\Models\HorarioProfesor");
    }
    public function horarioof(){
        return $this->belongsToMany("App\Models\HorarioOficial");
    }
}
