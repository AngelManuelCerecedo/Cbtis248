<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use App\Models\Especialidad;
use App\Models\Grado;
use App\Models\Padre;
use App\Models\Secundaria;
use Livewire\Component;

class Ralumnos extends Component
{
    public $NC, $N, $AP, $AM, $C, $LN, $NCA, $COL, $LOC, $CP, $LR, $NSS, $T, $TS, $EC, $EM, $G, $ESP, $PROM, $AF;
    public $NOM, $APP, $APM, $CEL;
    public $NSEC, $MODS, $CLAVS, $REG;
    public $BTUT, $SUGT, $TUTS, $BSEC, $SUGS, $SECS;
    public $AUXTUT, $AUXSEC;
    public $PADRES;

    public function render()
    {
        $GRADOS = Grado::all();
        $ESP = Especialidad::all();
        return view('livewire.alumnos.ralumnos', ['grados' => $GRADOS, 'especialidad' => $ESP]);
    }

    public function mount()
    {
        $this->reseteo();
    }

    public function reseteo()
    {
        $this->BTUT = '';
        $this->SUGT = [];
        $this->BSEC = '';
        $this->SUGS = [];
    }

    public function updatedBTUT()
    {
        $this->SUGT = Padre::Where([['Nombre', 'like', '%' . $this->BTUT . '%']])
            ->orWhere([['ApPaterno', 'like', '%' . $this->BTUT . '%']])
            ->orWhere([['ApMaterno', 'like', '%' . $this->BTUT . '%']])
            ->get();
    }

    public function updatedBSEC()
    {
        $this->SUGS = Secundaria::Where([['Nombre', 'like', '%' . $this->BSEC . '%']])
            ->orWhere([['ClaveSecu', 'like', '%' . $this->BSEC . '%']])
            ->get();
    }

    public function buscarTUT($id)
    {
        $this->reseteo();
        $this->TUTS = Padre::Where('id', $id)->first();
        $this->NOM = $this->TUTS->Nombre;
        $this->APP = $this->TUTS->ApPaterno;
        $this->APM = $this->TUTS->ApMaterno;
        $this->CEL = $this->TUTS->Telefono;
        $this->AUXTUT = $this->TUTS->id;
    }

    public function buscarSEC($id)
    {
        $this->reseteo();
        $this->SECS = Secundaria::Where('id', $id)->first();
        $this->NSEC = $this->SECS->Nombre;
        $this->MODS = $this->SECS->Modalidad;
        $this->REG = $this->SECS->Regimen;
        $this->CLAVS = $this->SECS->ClaveSecu;
        $this->AUXSEC = $this->SECS->id;
    }

    public function registrar()
    {
        Alumno::updateOrCreate([
            'Numero_Control' => $this->NC,
            'Estatus' => 'Activo',
            'Curp' => $this->C,
            'Nombre' => $this->N,
            'ApPaterno' => $this->AP,
            'ApMaterno' => $this->AM,
            'Correo_Electronico' => $this->EM,
            'Estado_Civil' => $this->EC,
            'Lugar_Nacimiento' => $this->LN,
            'Lugar_Radica' => $this->LR,
            'Localidad' => $this->LOC,
            'Codigo_Postal' => $this->CP,
            'Calle_Num' => $this->NCA,
            'Colonia' => $this->COL,
            'Celular_Alum' => $this->T,
            'Numero_Seguro' => $this->NSS,
            'Tipo_Sangre' => $this->TS,
            'Año_Fin' => $this->AF,
            'Promedio' => $this->PROM,
            'secundaria_id' => $this->AUXSEC,
            'padre_id' => $this->AUXTUT,
            'especialidad_id' => $this->ESP,
            'grado_id' => $this->G
        ]);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro guardado exitosamente',
            'type' => 'success'
        ]);
        $this->limpiar();
        $this->redic();
    }

    public function limpiar()
    {
        $this->NC = '';
        $this->C = '';
        $this->N = '';
        $this->AP = '';
        $this->AM = '';
        $this->EM = '';
        $this->EC = '';
        $this->LN = '';
        $this->LR = '';
        $this->LOC = '';
        $this->CP = '';
        $this->NCA = '';
        $this->COL = '';
        $this->T = '';
        $this->NSS = '';
        $this->TS = '';
        $this->AF = '';
        $this->PROM = '';
        $this->AUXSEC = '';
        $this->AUXTUT = '';
        $this->ESP = '';
        $this->G = '';
        $this->NOM = '';
        $this->APP = '';
        $this->APM = '';
        $this->CEL = '';
        $this->NSEC = '';
        $this->MODS = '';
        $this->CLAVS = '';
        $this->REG = '';
    }
    public function redic(){
        return view('livewire.alumnos.balumnos');
    }
}
