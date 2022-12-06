<?php

namespace App\Http\Livewire\Personal;

use App\Models\Profesor;
use Livewire\Component;

class Epersonal extends Component
{
    public $ide;
    public $N, $AP, $AM, $RFC, $CC, $P, $FI, $FID, $FIS, $CAT, $NT, $HN, $NP, $O, $C;
    public $ESTATUS;
    public function mount(){

        $profesor = Profesor::where('id', $this->ide)->first();

        $this->N = $profesor->Nombre;
        $this->C = $profesor->Curp;
        $this->AP = $profesor->ApPaterno;
        $this->AM = $profesor->ApMaterno;
        $this->RFC = $profesor->Rfc;
        $this->CC = $profesor->Clave_Cobro;
        $this->P = $profesor->Perfil;
        $this->FI = $profesor->Fecha_ingreso;
        $this->FID = $profesor->Fecha_ingreso_DGETI;
        $this->FIS = $profesor->Fecha_ingreso_SEP;
        $this->CAT = $profesor->Categoria;
        $this->NT = $profesor->Numero_Tarjeta;
        $this->HN = $profesor->Horas_Nom;
        $this->NP = $profesor->Numero_Plaza;
        $this->O = $profesor->Observaciones;
        $this->ESTATUS = $profesor->Estatus;
    }

    public function render()
    {
        return view('livewire.personal.epersonal');
    }

    public function actualizar(){

        Profesor::updateOrCreate(
            ['id' => $this->ide],
            ['Estatus' => $this->ESTATUS,
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
            'Observaciones' => $this->O,
        ]);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro actualizado exitosamente',
            'type' => 'success'
        ]);
        $this->redic();
    }
    public function redic(){
        return redirect()->route('BuscarPersonal');
    }
}
