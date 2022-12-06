<?php

namespace App\Http\Livewire\Administrador;

use App\Models\User;
use Livewire\Component;

class Radministrador extends Component
{
    public $N, $AP, $AM, $RFC, $CC, $P, $FI, $FID, $FIS, $CAT, $NT, $HN, $NP, $O, $C, $E, $PS;

    public function render()
    {
        return view('livewire.administrador.radministrador');
    }


    public function registrar()
    {
        User::updateOrCreate([
            'Estatus' => 'Activo',
            'Curp' => $this->C,
            'Nombre' => $this->N,
            'ApPaterno' => $this->AP,
            'ApMaterno' => $this->AM,
            'Rfc' => $this->RFC,
            'Clave_Cobro' => $this->CC,
            'Puesto' => 'Administrador',
            'Perfil' => $this->P,
            'Fecha_ingreso' => $this->FI,
            'Fecha_ingreso_SEP' => $this->FIS,
            'Fecha_ingreso_DGETI' => $this->FID,
            'Categoria' => $this->CAT,
            'Numero_Tarjeta' => $this->NT,
            'Horas_Nom' => $this->HN,
            'Numero_Plaza' => $this->NP,
            'Observaciones' => $this->O,
            'email' => $this->E,
            'password' => $this->PS,
        ]);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro guardado exitosamente',
            'type' => 'success'
        ]);
        $this->limpiar();
        $this->redic();
    }

    public function limpiar()
    {
        $this->C = '';
        $this->N = '';
        $this->AP = '';
        $this->AM = '';
        $this->RFC = '';
        $this->CC = '';
        $this->P = '';
        $this->FI = '';
        $this->FIS = '';
        $this->FID = '';
        $this->CAT = '';
        $this->NT = '';
        $this->HN = '';
        $this->NP = '';
        $this->O = '';
        $this->E = '';
        $this->PS = '';
    }
    public function redic(){
        return redirect()->route('BuscarAdministrador');
    }
}

