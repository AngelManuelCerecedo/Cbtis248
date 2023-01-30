<?php

namespace App\Http\Livewire\Administrador;

use App\Models\User;
use Livewire\Component;

class Eadministrador extends Component
{
    public $ide;
    public $N, $AP, $AM, $RFC, $CC, $P, $FI, $FID, $FIS, $CAT, $NT, $HN, $NP, $O, $C, $E, $PS, $TD, $PT;
    public $ESTATUS;

    //VALIDACIONES
    protected $rules = [
        'N' => 'required',
        'AP' => 'required',
        'AM' => 'required',
        'C' => 'required|min:18|max:18',
        'RFC' => 'required|min:13|max:13',
        'CC' => 'required',
        'CAT' => 'required',
        'FI' => 'required',
        'FID' => 'required',
        'FIS' => 'required',
        'NP' => 'required',
        'HN' => 'required|numeric',
        'NT' => 'required|numeric',
        'P' => 'required',
        'O' => 'required',
        'PT' => 'required',
        'TD' => 'required',
        'E' => 'required|email',
        'ESTATUS' => 'required',

    ];

    //MENSAJES DE ERRORES
    protected $messages = [
        'N.required' => 'El campo nombre no puede estar vacío',
        'AP.required' => 'El campo apellido paterno no puede estar vacío',
        'AM.required' => 'El campo apellido materno no puede estar vacío',
        'C.required' => 'El campo curp no puede estar vacío',
        'C.min' => 'Curp invalida',
        'C.max' => 'Curp invalida',
        'RFC.required' => 'El campo rfc no puede estar vacío',
        'RFC.min' => 'RFC invalida',
        'RFC.max' => 'RFC invalida',
        'CC.required' => 'El campo clave de cobro no puede estar vacío',
        'CAT.required' => 'El campo categoría no puede estar vacío',
        'FI.required' => 'El campo fecha de ingreso no puede estar vacío',
        'FID.required' => 'El campo fecha de ingreso al DGETI no puede estar vacío',
        'FIS.required' => 'El campo fecha de ingreso a la SEP no puede estar vacío',
        'NP.required' => 'El campo número de plaza no puede estar vacío',
        'HN.required' => 'El campo horas de nombramiento no puede estar vacío',
        'HN.numeric' => 'Horas de nombramiento no validas',
        'NT.required' => 'El campo número de tarjeta no puede estar vacío',
        'NT.numeric' => 'Número de tarjeta no valido',
        'P.required' => 'El campo perfil no puede estar vacío',
        'O.required' => 'El campo observaciones no puede estar vacío',
        'PT.required' => 'El campo puesto no puede estar vacío',
        'TD.required' => 'El campo tipo de personal no puede estar vacío',
        'E.required' => 'El campo correo electronico no puede estar vacío',
        'E.email' => 'Correo electronico invalido',
        'ESTATUS.required' => 'El campo estatus no puede estar vacío',
       
    ];


    public function mount()
    {

        $administrador = User::where('id', $this->ide)->first();

        $this->N = $administrador->Nombre;
        $this->C = $administrador->Curp;
        $this->AP = $administrador->ApPaterno;
        $this->AM = $administrador->ApMaterno;
        $this->RFC = $administrador->Rfc;
        $this->CC = $administrador->Clave_Cobro;
        $this->P = $administrador->Perfil;
        $this->FI = $administrador->Fecha_ingreso;
        $this->FID = $administrador->Fecha_ingreso_DGETI;
        $this->FIS = $administrador->Fecha_ingreso_SEP;
        $this->CAT = $administrador->Categoria;
        $this->NT = $administrador->Numero_Tarjeta;
        $this->HN = $administrador->Horas_Nom;
        $this->NP = $administrador->Numero_Plaza;
        $this->PT = $administrador->Puesto;
        $this->E = $administrador->email;
        $this->O = $administrador->Observaciones;
        $this->ESTATUS = $administrador->Estatus;
        $this->TD = $administrador->Tipo;
    }

    public function render()
    {
        return view('livewire.administrador.eadministrador');
    }

     //metodo que valida en tiempo real
     public function updated($propertyName)
     {
         $this->validateOnly($propertyName);
     }

    public function actualizar()
    {
        $this->validate();
        if ($this->TD == 'No usuario') {
            User::updateOrCreate(
                ['id' => $this->ide],
                [
                    'Estatus' => $this->ESTATUS,
                    'EstatusUser' => $this->ESTATUS,
                    'Curp' => $this->C,
                    'Nombre' => $this->N,
                    'ApPaterno' => $this->AP,
                    'ApMaterno' => $this->AM,
                    'Rfc' => $this->RFC,
                    'Clave_Cobro' => $this->CC,
                    'Perfil' => $this->P,
                    'Fecha_ingreso' => $this->FI,
                    'Fecha_ingreso_DGETI' => $this->FID,
                    'Fecha_ingreso_SEP' => $this->FIS,
                    'Categoria' => $this->CAT,
                    'Numero_Tarjeta' => $this->NT,
                    'Horas_Nom' => $this->HN,
                    'Numero_Plaza' => $this->NP,
                    'Puesto' => $this->PT,
                    'Observaciones' => $this->O,
                    'password' => Null,
                    'password2' => Null,
                    'Tipo' => $this->TD,

                ]
            );
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Registro actualizado exitosamente',
                'type' => 'success'
            ]);
            $this->redic();
        }else{
            User::updateOrCreate(
                ['id' => $this->ide],
                [
                    'Estatus' => $this->ESTATUS,
                    'EstatusUser' => $this->ESTATUS,
                    'Curp' => $this->C,
                    'Nombre' => $this->N,
                    'ApPaterno' => $this->AP,
                    'ApMaterno' => $this->AM,
                    'Rfc' => $this->RFC,
                    'Clave_Cobro' => $this->CC,
                    'Perfil' => $this->P,
                    'Fecha_ingreso' => $this->FI,
                    'Fecha_ingreso_DGETI' => $this->FID,
                    'Fecha_ingreso_SEP' => $this->FIS,
                    'Categoria' => $this->CAT,
                    'Numero_Tarjeta' => $this->NT,
                    'Horas_Nom' => $this->HN,
                    'Numero_Plaza' => $this->NP,
                    'Puesto' => $this->PT,
                    'Observaciones' => $this->O,
                    'Tipo' => $this->TD,

                ]
            );
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Registro actualizado exitosamente',
                'type' => 'success'
            ]);
            $this->redic();
        }
    }

    public function redic()
    {
        return redirect()->route('BuscarAdministrador');
    }
}
