<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Profesor;
use Livewire\Component;
use Livewire\WithPagination;

class Hprofesor extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public function render()
    {
        $profesores = Profesor::Where([['Nombre', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo']])
            ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo']])
            ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo']])
            ->orWhere([['Curp', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo']])
            ->paginate($this->cantidad);
        return view('livewire.horarios.hprofesor', ['profesores' => $profesores]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingEstatus()
    {
        $this->resetPage();
    }
    public function updatingCantidad()
    {
        $this->resetPage();
    }
    public function redic(){
        return redirect()->route('Horarios');
    }
}
