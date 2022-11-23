<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Livewire\Component;
use Livewire\WithPagination;

class Balumnos extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $estatus = 'Todos';
    public $prueba;


    public function render()
    {
        if ($this->estatus == "Todos") {
            $alumnos = Alumno::Where([['Numero_Control', 'like', '%' . $this->search . '%']])
                ->orWhere([['Nombre', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['Curp', 'like', '%' . $this->search . '%']])
                ->paginate($this->cantidad);
        } else
            $alumnos = Alumno::Where([['Numero_Control', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['Nombre', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['Curp', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->paginate($this->cantidad);
        return view('livewire.alumnos.balumnos', ['alumnos' => $alumnos]);
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
}
