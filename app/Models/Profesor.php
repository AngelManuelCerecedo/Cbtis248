<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable = ['id','Curp','Nombre','ApPaterno','ApMaterno','Rfc','Clave_Cobro','Puesto','Perfil','Fecha_ingreso','Fecha_ingreso_SEP',	
        'Fecha_ingreso_DGETI','Categoria','Numero_Tarjeta','Horas_Nom','Numero_Plaza','Observaciones','Estatus'];
    public function actcomp(){
        return $this->belongsToMany("App\Models\ActComp");
    }
    public function materia(){
        return $this->belongsToMany("App\Models\Materia")
        ->withTimestamps()->withPivot(['Hora', 'Dia']);
    }

}
