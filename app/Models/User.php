<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email','password2',
        'password','id','Curp','Nombre','ApPaterno','ApMaterno','Rfc','Clave_Cobro','Puesto','Perfil','Fecha_ingreso','Fecha_ingreso_SEP',	
        'Fecha_ingreso_DGETI','Categoria','Numero_Tarjeta','Horas_Nom','Numero_Plaza','Observaciones','Estatus','Tipo','EstatusUser','Perfil_A'
    ];
    
    
    public function incidencia(){
        return $this->hasMany("App\Models\Incidencia");
    }
    public function materia(){
        return $this->hasMany("App\Models\Materia");
    }
    public function horario_profesor(){
        return $this->hasMany("App\Models\Horario_Profesor");
    }
    public function actcomp(){
        return $this->hasMany("App\Models\ActComp");
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
