<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Horario_Profesor;
use App\Models\Materia;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Thorario extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    protected $listeners = ['delete'];
    public function render()
    {
        $profesores = User::Where([['Nombre', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo'], ['Puesto', 'like', '%' . 'Docente' . '%'],['Horas_Nom', '<=', 30]])
            ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo'], ['Puesto', 'like', '%' . 'Docente' . '%'],['Horas_Nom', '<=', 30]])
            ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo'], ['Puesto', 'like', '%' . 'Docente' . '%'],['Horas_Nom', '<=', 30]])
            ->orWhere([['Curp', 'like', '%' . $this->search . '%'], ['Estatus', '=', 'Activo'], ['Puesto', 'like', '%' . 'Docente' . '%'],['Horas_Nom', '<=', 30]])
            ->paginate($this->cantidad);
        return view('livewire.horarios.thorario', ['profesores' => $profesores]);
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
        Materia::where('profesor_id' , $id)->update(['Horas_Reg' => 0,]);

        $this->redic();

    }
    public function redic(){
        return redirect()->route('HorariosT');
    }
}
