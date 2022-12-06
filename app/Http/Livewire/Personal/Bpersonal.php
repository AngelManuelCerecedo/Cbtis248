<?php

namespace App\Http\Livewire\Personal;

use App\Models\Profesor;
use Livewire\Component;
use Livewire\WithPagination;

class Bpersonal extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $estatus = 'Todos';
    protected $listeners = ['delete'];


    public function render()
    {
        if ($this->estatus == "Todos") {
            $profesores = Profesor::Where([['Nombre', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['Curp', 'like', '%' . $this->search . '%']])
                ->paginate($this->cantidad);
        } else
            $profesores = Profesor::Where([['Nombre', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['Curp', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->paginate($this->cantidad);
        return view('livewire.personal.bpersonal', ['profesores' => $profesores]);
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

    public function borrar($id){

        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Estás seguro de eliminar?',
            'type' => 'warning',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {

        Profesor::findOrFail($id)->delete();
        $this->redic();

    }

    public function redic(){
        return redirect()->route('BuscarPersonal');
    }
}
