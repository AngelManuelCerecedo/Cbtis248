<?php

namespace App\Http\Livewire\Administrador;

use App\Models\User;
use Livewire\Component;

class Eadministrador extends Component
{
    public $ide;
    public $N, $AP, $AM, $RFC, $CC, $P, $FI, $FID, $FIS, $CAT, $NT, $HN, $NP, $O, $C, $E, $PS, $TD, $PT;
    public $ESTATUS;
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

    public function actualizar()
    {
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
