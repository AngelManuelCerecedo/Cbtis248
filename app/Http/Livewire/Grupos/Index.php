<?php

namespace App\Http\Livewire\Grupos;

use App\Models\Grupo;
use App\Models\CicloEscolar;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $CG, $T, $E, $S, $G, $C;
    public $cicloescolar;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    protected $listeners = ['delete'];

    public function render()
    {
        $grupos = Grupo::Where([['Clave_Grupo', 'like', '%' . $this->search . '%']])
            ->orWhere([['Turno', 'like', '%' . $this->search . '%']])
            ->orWhere([['Especialidad', 'like', '%' . $this->search . '%']])
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
        $this->estado = 0;
        $this->modal = false;
    }
    public function limpiarCampos()
    {
    }
    public function guardar()
    {
    }

    public function editar($id)
    {
    }

    public function borrar($id)
    {
    }

    public function delete($id)
    {

        Materia::findOrFail($id)->delete();
        $this->redic();
    }

    public function redic()
    {
        return redirect()->route('Grupos');
    }
}
