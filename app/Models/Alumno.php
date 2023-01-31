<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable=['id','Numero_Control','Estatus','Curp','Nombre','ApPaterno','ApMaterno','Correo_Electronico','Estado_Civil','Lugar_Nacimiento','Lugar_Radica','Localidad','Codigo_Postal',
    'Calle_Num','Colonia','Telefono_Fijo','Celular_Alum','Numero_Seguro','Tipo_Sangre','Año_Fin','Promedio','secundaria_id','padre_id','grupo_id','especialidad_id','grado_id'];

    public function secundaria(){
        return $this->belongsTo("App\Models\Secundaria");
    }
    public function padre(){
        return $this->belongsTo("App\Models\Padre");
    }
    public function grupo(){
        return $this->belongsTo("App\Models\Grupo");
    }
    public function especialidad(){
        return $this->belongsTo("App\Models\Especialidad");
    }
    public function grado(){
        return $this->belongsTo("App\Models\Grado");
    }
    public function incidencia(){
        return $this->hasMany("App\Models\Incidencia");
    }
}
