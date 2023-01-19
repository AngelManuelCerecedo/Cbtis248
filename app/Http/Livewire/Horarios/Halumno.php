<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Grupo;
use Livewire\Component;
use Livewire\WithPagination;

class Halumno extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public function render()
    {
        $grupos = Grupo::Where([['Clave_Grupo', 'like', '%' . $this->search . '%']])
            ->orWhere([['Salon', 'like', '%' . $this->search . '%']])
            ->orWhere([['especialidad_id', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);
        return view('livewire.horarios.halumno', ['grupos' => $grupos]);
    }
}
