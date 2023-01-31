<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    protected $fillable=['id','Fecha','Descripcion','ciclo_id','alumno_id','user_id','Fecha_C'];
    public function alumno(){
        return $this->belongsTo("App\Models\Alumno");
    }
    public function ciclo(){
        return $this->belongsTo("App\Models\CicloEscolar");
    }
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
}
