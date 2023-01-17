<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Horario_Profesor;
use App\Models\Profesor;
use Livewire\Component;
use Livewire\WithPagination;

class Hprofesor extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    protected $listeners = ['delete'];
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
    public function borrar($id){

        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Estás seguro de eliminar?',
            'type' => 'warning',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {

        Horario_Profesor::where('profesor_id', $id)->delete();
        $this->redic();

    }
    public function redic(){
        return redirect()->route('Horarios');
    }
}
