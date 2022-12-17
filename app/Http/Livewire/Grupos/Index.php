<?php

namespace App\Http\Livewire\Grupos;

use App\Models\Alumno;
use App\Models\Grupo;
use App\Models\CicloEscolar;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $CG, $T, $E, $S, $G, $C, $TOT, $CONT;
    public $cicloescolar;
    public $modalAÑ = false;
    public $texto = "";
    public $estado = 0;
    public $Alumnos, $gruposAÑ;
    public $ListaALAÑ;
    public $Prueba, $IDAUX;

    public function render()
    {
        $grupos = Grupo::Where([['Clave_Grupo', 'like', '%' . $this->search . '%']])
            ->orWhere([['Turno', 'like', '%' . $this->search . '%']])
            ->orWhere([['Salon', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);
        return view('livewire.grupos.index', ['grupos' => $grupos]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingCantidad()
    {
        $this->resetPage();
    }
    public function abrirmodalAÑ()
    {
        $this->modalAÑ = true;
    }
    public function cerrarModalAÑ()
    {
        $this->modalAÑ = false;
    }
    public function redic()
    {
        return redirect()->route('Grupos');
    }
    public function añadirA($id)
    {
        $this->IDAUX = $id;
        $this->gruposAÑ = Grupo::Where([['id', $id]])->first();
        if ($this->gruposAÑ->TotAL == 0) {
            Grupo::updateOrCreate(
                ['id' => $id],
                ['Estatus' => 'Cerrado']
            );
            $this->cerrarModalAÑ();
        } else {
            $this->Prueba = $this->gruposAÑ->id;
            $this->TOT = $this->gruposAÑ->TotAL;
            $this->CONT = $this->gruposAÑ->ALR;
            $this->Alumnos = Alumno::Where([['grado_id', '=', $this->gruposAÑ->grado_id], ['especialidad_id', '=', $this->gruposAÑ->especialidad_id], ['grupo_id', '=', null]])->get();
            $this->abrirmodalAÑ();
        }
    }
    public function agregarA($id)
    {
        Alumno::updateOrCreate(
            ['id' => $id],
            ['grupo_id' => $this->Prueba]
        );
        Grupo::updateOrCreate(
            ['id' => $this->IDAUX],
            [
                'TotAL' => $this->TOT - 1,
                'ALR' => $this->CONT + 1
            ]
        );
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Alumno Añadido',
            'type' => 'success'
        ]);
        $this->añadirA($this->IDAUX);
    }
}
