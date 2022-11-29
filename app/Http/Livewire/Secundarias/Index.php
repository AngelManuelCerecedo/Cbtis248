<?php

namespace App\Http\Livewire\Secundarias;

use Livewire\Component;
use App\Models\Secundaria;
use Livewire\WithPagination;

class Index extends Component
{    
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $CLAVE,$NOM,$MOD,$REG;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    public function render()
    {
        $secundarias = Secundaria::Where([['Nombre', 'like', '%' . $this->search . '%']])
            ->orWhere([['ClaveSecu', 'like', '%' . $this->search . '%']])
            ->orWhere([['Modalidad', 'like', '%' . $this->search . '%']])
            ->orWhere([['Regimen', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);
        return view('livewire.secundarias.index', ['secundarias' => $secundarias]);
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
            $this->texto = "Registrar una Secundaria";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar una Secundaria";
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
        $this->REG = '';
        $this->MOD = '';
        $this->CLAVE = '';
    }
    public function guardar()
    {
        Secundaria::updateOrCreate([
            'ClaveSecu' => $this->CLAVE,
            'Nombre' => $this->NOM,
            'Modalidad' => $this->MOD,
            'Regimen' => $this->REG,
        ]);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro Exitoso',
            'type' => 'success'
        ]);

        $this->limpiarCampos();
        $this->cerrarModal();
    }
}
