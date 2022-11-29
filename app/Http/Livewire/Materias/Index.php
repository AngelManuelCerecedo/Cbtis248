<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $NOM, $HS, $ESP, $G;
    public $modal = false;
    public $texto = "";
    public $estado = 0;

    public function render()
    {
        $materias = Materia::Where([['Nombre', 'like', '%' . $this->search . '%']])
        ->orWhere([['especialidad_id', 'like', '%' . $this->search . '%']])
        ->paginate($this->cantidad);
        return view('livewire.materias.index',['materias' => $materias]);
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
            $this->texto = "Registrar una Materia";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar una Materia";
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
        $this->ESP = '';
        $this->G = '';
    }
    public function guardar()
    {
        Materia::updateOrCreate([
            'Nombre' => $this->NOM,
            'Horas_Sem' => $this->HS,
            'especialidad_id' => $this->ESP,
            'grado_id' => $this->G,
        ]);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro Exitoso',
            'type' => 'success'
        ]);

        $this->limpiarCampos();
        $this->cerrarModal();
    }
}
