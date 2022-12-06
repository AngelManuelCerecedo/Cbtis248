<?php

namespace App\Http\Livewire\Administrador;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Badministrador extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $estatus = 'Todos';
    protected $listeners = ['delete'];


    public function render()
    {
        if ($this->estatus == "Todos") {
            $administradores = User::Where([['Nombre', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%']])
                ->paginate($this->cantidad);
        } else
            $administradores = User::Where([['Nombre', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->paginate($this->cantidad);
        return view('livewire.administrador.badministrador', ['administradores' => $administradores]);
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

        User::findOrFail($id)->delete();
        $this->redic();

    }

    public function redic(){
        return redirect()->route('BuscarAdministrador');
    }
}

