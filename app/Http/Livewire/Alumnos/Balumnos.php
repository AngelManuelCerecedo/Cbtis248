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
    protected $listeners = ['delete'];


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

    public function borrar($id){

        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Estás seguro de eliminar?',
            'type' => 'warning',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {

        Alumno::findOrFail($id)->delete();
        $this->redic();

    }
    public function info($id){
        $t1 = ' INFORMACIÓN <br>';
        $alumno = Alumno::findOrFail($id);
        if ($alumno -> grupo_id == null){$auxg = 'Sin Asignar';}else{ $auxg = $alumno->grupo->Clave_Grupo;}
        $t1 .= '<FONT SIZE=5> Alumno : '.$alumno->Nombre .' ' . $alumno->ApPaterno . ' ' . $alumno->ApMaterno .'<br/> Numero de Control : '.$alumno->Numero_Control
        .'<br> Estatus: '.$alumno->Estatus .'<br> Curp : '.$alumno->Curp .'<br> Correo : '.$alumno->Correo_Electronico .'<br> Estado Civil : '.$alumno->Estado_Civil
        .'<br> Lugar de Nacimiento : '.$alumno->Lugar_Nacimiento .'<br> Lugar de Radicación : '.$alumno->Lugar_Radica .'<br> Localidad : '.$alumno->Localidad .'<br> C.P. : '.$alumno->Codigo_Postal
        .' Calle : '.$alumno->Calle_Num .'<br/> Colonia : '.$alumno->Colonia .'<br/> Celular : '.$alumno->Celular_Alum .'<br/> Numero de Seguro : '.$alumno->Numero_Seguro
        .'<br> Tipo Sanguineo : '.$alumno->Tipo_Sangre .'<br/> Año de Terminación : '.$alumno->Año_Fin .'<br/> Secundaria : '.$alumno->secundaria->Nombre .'<br/> Grado : '.$alumno->grado->Nombre
        .'<br> Especialidad : '.$alumno->especialidad->Nombre.'<br> Grupo : '. $auxg .'<br/> Tutor : '.$alumno->padre->Nombre.' '.$alumno->padre->ApPaterno.' '.$alumno->padre->ApMaterno . '</font>';
        $this->dispatchBrowserEvent('swal', [
            'title' => $t1,
        ]); 
    }
    public function redic(){
        return redirect()->route('Alumnos');
    }
}
