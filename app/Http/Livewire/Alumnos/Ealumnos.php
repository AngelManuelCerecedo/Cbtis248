<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use App\Models\Especialidad;
use App\Models\Grado;
use App\Models\Padre;
use App\Models\Secundaria;
use Livewire\Component;

class Ealumnos extends Component
{
    public $ide;
    public $NC, $N, $AP, $AM, $C, $LN, $NCA, $COL, $LOC, $CP, $LR, $NSS, $TS, $EC, $EM, $T, $G, $ESP, $PROM, $AF, $EST;
    public $BTUT, $SUGT, $NOM, $APP, $APM, $CEL;
    public $BSEC, $SUGS, $NSEC, $MODS, $CLAVS, $REG;
    public $AUXTUT = 0, $AUXSEC = 0, $AUXTUT2, $AUXSEC2;
    public function render()
    {
        $GRADOS = Grado::all();
        $ESP = Especialidad::all();
        return view('livewire.alumnos.ealumnos', ['grados' => $GRADOS, 'especialidad' => $ESP]);
    }

    public function mount()
    {

        $alumno = Alumno::where('id', $this->ide)->first();

        $this->NC = $alumno->Numero_Control;
        $this->N = $alumno->Nombre;
        $this->C = $alumno->Curp;
        $this->AP = $alumno->ApPaterno;
        $this->AM = $alumno->ApMaterno;
        $this->EM = $alumno->Correo_Electronico;
        $this->EC = $alumno->Estado_Civil;
        $this->LN = $alumno->Lugar_Nacimiento;
        $this->LR = $alumno->Lugar_Radica;
        $this->LOC = $alumno->Localidad;
        $this->CP = $alumno->Codigo_Postal;
        $this->NCA = $alumno->Calle_Num;
        $this->COL = $alumno->Colonia;
        $this->T = $alumno->Celular_Alum;
        $this->NSS = $alumno->Numero_Seguro;
        $this->TS = $alumno->Tipo_Sangre;
        $this->AF = $alumno->Año_Fin;
        $this->PROM = $alumno->Promedio;
        $this->EST = $alumno->Estatus;

        $especialidad = Especialidad::where('id', $alumno->especialidad_id)->first();
        $this->ESP = $especialidad->id;

        $grado = Grado::where('id', $alumno->grado_id)->first();
        $this->G = $grado->id;

        $padre = Padre::where('id', $alumno->padre_id)->first();
        $this->NOM = $padre->Nombre;
        $this->APP = $padre->ApPaterno;
        $this->APM = $padre->ApMaterno;
        $this->CEL = $padre->Telefono;
        $this->AUXTUT2 = $padre->id;


        $secundaria = Secundaria::where('id', $alumno->secundaria_id)->first();
        $this->NSEC = $secundaria->Nombre;
        $this->CLAVS = $secundaria->ClaveSecu;
        $this->MODS = $secundaria->Modalidad;
        $this->REG = $secundaria->Regimen;
        $this->AUXSEC2 = $secundaria->id;

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

    public function actualizar()
    {

        if ($this->AUXTUT == 0) {
            $tutor = $this->AUXTUT2;
        } else {
            $tutor = $this->AUXTUT;
        }

        if ($this->AUXSEC == 0) {
            $secundaria = $this->AUXSEC2;
        } else {
            $secundaria = $this->AUXSEC;
        }
        if ($this->EST == 'Baja Temporal') {
            Alumno::updateOrCreate(
                ['id' => $this->ide],
                [
                    'Numero_Control' => $this->NC,
                    'Estatus' => $this->EST,
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
                    'especialidad_id' => $this->ESP,
                    'grado_id' => $this->G,
                    'secundaria_id' => $secundaria,
                    'padre_id' => $tutor,
                    'grupo_id' => null,
                ]
            );
        }
        if ($this->EST == 'Baja Definitiva') {
            Alumno::updateOrCreate(
                ['id' => $this->ide],
                [
                    'Numero_Control' => $this->NC,
                    'Estatus' => $this->EST,
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
                    'especialidad_id' => $this->ESP,
                    'grado_id' => null,
                    'secundaria_id' => $secundaria,
                    'padre_id' => $tutor,
                    'grupo_id' => null,
                ]
            );
        }
        if ($this->EST == 'Activo') {
            Alumno::updateOrCreate(
                ['id' => $this->ide],
                [
                    'Numero_Control' => $this->NC,
                    'Estatus' => $this->EST,
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
                    'especialidad_id' => $this->ESP,
                    'grado_id' => $this->G,
                    'secundaria_id' => $secundaria,
                    'padre_id' => $tutor,
                    'grupo_id' => null,
                ]
            );
        }
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro actualizado exitosamente',
            'type' => 'success'
        ]);
        $this->redic();
    }


    public function redic()
    {
        return redirect()->route('Alumnos');
    }
}
