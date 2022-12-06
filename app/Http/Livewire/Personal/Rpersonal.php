<?php

namespace App\Http\Livewire\Personal;

use App\Models\Profesor;
use Livewire\Component;

class Rpersonal extends Component
{
    public $N, $AP, $AM, $RFC, $CC, $P, $FI, $FID, $FIS, $CAT, $NT, $HN, $NP, $O, $C;

    public function render()
    {
        return view('livewire.personal.rpersonal');
    }


    public function registrar()
    {
        Profesor::updateOrCreate([
            'Estatus' => 'Activo',
            'Curp' => $this->C,
            'Nombre' => $this->N,
            'ApPaterno' => $this->AP,
            'ApMaterno' => $this->AM,
            'Rfc' => $this->RFC,
            'Clave_Cobro' => $this->CC,
            'Puesto' => 'Profesor',
            'Perfil' => $this->P,
            'Fecha_ingreso' => $this->FI,
            'Fecha_ingreso_SEP' => $this->FIS,
            'Fecha_ingreso_DGETI' => $this->FID,
            'Categoria' => $this->CAT,
            'Numero_Tarjeta' => $this->NT,
            'Horas_Nom' => $this->HN,
            'Numero_Plaza' => $this->NP,
            'Observaciones' => $this->O,
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
    }
    public function redic(){
        return redirect()->route('BuscarPersonal');
    }
}
