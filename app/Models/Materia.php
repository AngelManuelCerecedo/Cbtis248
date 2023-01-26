<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable=['id','Nombre','Horas_Sem','Horas_Reg','Tipo','especialidad_id','grado_id','profesor_id','grupo_id'];
    public function grupo(){
        return $this->belongsTo("App\Models\Grupo");
    }
    public function grado(){
        return $this->belongsTo("App\Models\Grado");
    }
    public function especialidad(){
        return $this->belongsTo("App\Models\Especialidad");
    }
    public function profesor(){
        return $this->belongsTo("App\Models\User");
    }
    public function horario_profesor(){
        return $this->hasMany("App\Models\Horario_Profesor");
    }
}
