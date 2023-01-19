<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario_Profesor extends Model
{
    use HasFactory;
    protected $fillable=['dia_id','hora_id','materia_id','profesor_id','grupo_id'];
    public function dia(){
        return $this->belongsTo("App\Models\Dia");
    }
    public function hora(){
        return $this->belongsTo("App\Models\Hora");
    }
    public function materia(){
        return $this->belongsTo("App\Models\Materia");
    }
    public function profesor(){
        return $this->belongsTo("App\Models\Profesor");
    }
    public function grupo(){
        return $this->belongsTo("App\Models\Grupo");
    }
}
