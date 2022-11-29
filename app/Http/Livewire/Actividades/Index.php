<?php

namespace App\Http\Livewire\Actividades;

use App\Models\ActComp;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $NOM, $HS;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    public function render()
    {
        $actividades = ActComp::Where([['Nombre', 'like', '%' . $this->search . '%']])
        ->paginate($this->cantidad);
        return view('livewire.actividades.index',['actividades' => $actividades]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingCantidad()
    {
        $this->resetPage();
    }
    public function crearmodal()
    {
        $this->limpiarCampos();
        $this->abrirmodal();
    }
    public function abrirmodal()
    {
        if ($this->estado == 0) {
            $this->texto = "Registrar una Actividad Complementaria";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar una Actividad Complementaria";
            $this->modal = true;
        }
    }
    public function cerrarModal()
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->NOM = '';
        $this->HS = '';
    }
    public function guardar()
    {
        ActComp::updateOrCreate([
            'Nombre' => $this->NOM,
            'HoraSem' => $this->HS,
        ]);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro Exitoso',
            'type' => 'success'
        ]);

        $this->limpiarCampos();
        $this->cerrarModal();
    }
}
