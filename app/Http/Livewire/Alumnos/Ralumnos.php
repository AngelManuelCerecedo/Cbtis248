<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use App\Models\Especialidad;
use App\Models\Grado;
use App\Models\Padre;
use App\Models\Secundaria;
use Livewire\Component;
use PhpParser\Node\Stmt\For_;

class Ralumnos extends Component
{
    public $NC, $N, $AP, $AM, $C, $LN, $NCA, $COL, $LOC, $CP, $LR, $NSS, $T, $TS, $EC, $EM, $G, $ESP, $PROM, $AF;
    public $NOM, $APP, $APM, $CEL;
    public $NSEC, $MODS, $CLAVS, $REG;
    public $BTUT, $SUGT, $TUTS, $BSEC, $SUGS, $SECS;
    public $AUXTUT, $AUXSEC, $n,$nom, $apep, $apem ;
    public $PADRES;

    //validaciones
    protected $rules = [
        'NC' => 'required|numeric',
        'N' => 'required',
        'AP' => 'required',
        'AM' => 'required',
        'C' => 'required|min:18|max:18',
        'LN' => 'required',
        'NCA' => 'required',
        'COL' => 'required',
        'LOC' => 'required',
        'CP' => 'required|numeric',
        'LR' => 'required',
        'NSS' => 'required|min:11|max:11',
        'TS' => 'required',
        'EC' => 'required',
        'EM' => 'required|email',
        'T' => 'required|digits_between:10,10',
        'G' => 'required',
        'ESP' => 'required',
        'PROM' => 'required|numeric',
        'AF' => 'required',

        'NOM' => 'required',
        'APP' => 'required',
        'APM' => 'required',
        'CEL' => 'required|digits_between:10,10',

        'NSEC' => 'required',
        'CLAVS' => 'required',
        'MODS' => 'required',
        'REG' => 'required',



    ];
    //Mensajes de validaciones
    protected $messages = [
        'NC.required' => 'El campo numero de control puede estar vacío',
        'NC.numeric' => 'Solo se aceptan numeros',
        'N.required' => 'El campo nombre no puede estar vacío',
        'AP.required' => 'El campo apellido paterno no puede estar vacío',
        'AM.required' => 'El campo apellido materno no puede estar vacío',
        'C.required' => 'El campo curp no puede estar vacío',
        'C.min' => 'Curp invalida',
        'C.max' => 'Curp invalida',
        'LN.required' => 'El campo lugar de nacimiento no puede estar vacío',
        'NCA.required' => 'El campo número de calle no puede estar vacío',
        'COL.required' => 'El campo colonia no puede estar vacío',
        'LOC.required' => 'El campo localidad no puede estar vacío',
        'CP.required' => 'El campo código postal no puede estar vacío',
        'CP.numeric' => 'Solo se aceptan numeros',
        'LR.required' => 'El campo lugar de radicación no puede estar vacío',
        'NSS.required' => 'El campo número de seguro social no puede estar vacío',
        'NSS.min' => 'Número de seguro social invalido',
        'NSS.max' => 'Número de seguro social invalido',
        'TS.required' => 'El campo tipo de sangre no puede estar vacío',
        'EC.required' => 'El campo estado civil no puede estar vacío',
        'EM.required' => 'El campo correo electronico no puede estar vacío',
        'EM.email' => 'Correo electronico invalido',
        'T.required' => 'El campo correo telefono no puede estar vacío',
        'T.digits_between' => 'Telefono invalido',
        'G.required' => 'El campo grado no puede estar vacío',
        'ESP.required' => 'El campo especialidad no puede estar vacío',
        'PROM.required' => 'El campo promedio no puede estar vacío',
        'PROM.numeric' => 'Promedio invalido',
        'AF.required' => 'El campo año de finalización no puede estar vacío',
        'NOM.required' => 'El campo nombre no puede estar vacío',
        'APP.required' => 'El campo apellido paterno no puede estar vacío',
        'APM.required' => 'El campo apellido materno no puede estar vacío',
        'CEL.required' => 'El campo telefono no puede estar vacío',
        'CEL.digits_between' => 'Telefono invalido',


        'NSEC.required' => 'El campo nombre no puede estar vacío',
        'CLAVS.required' => 'El campo clave de secundaria no puede estar vacío',
        'MODS.required' => 'El campo modalidad no puede estar vacío',
        'REG.required' => 'El campo regimen no puede estar vacío',


    ];


    public function render()
    {
        if ($this->C != ''){
            $car = str_split($this->C);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
                if ($i>3){ break;}
               if (is_numeric($car[$i])) {
                    $this->n = 'La curp no debe empezar con numeros';
                } else {
                    $this->n = '';
                }
            }
        }else{
            $this->n = '';
        }

        if ($this->N != ''){
            $car = str_split($this->N);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
               if (is_numeric($car[$i])) {
                    $this->nom = 'El nombre no puede llevar numeros';
                } else {
                    $this->nom = '';
                }
            }
        }else{
            $this->nom = '';
        }

        if ($this->AP != ''){
            $car = str_split($this->AP);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
               if (is_numeric($car[$i])) {
                    $this->apep = 'El apellido paterno no puede llevar numeros';
                } else {
                    $this->apep = '';
                }
            }
        }else{
            $this->apep = '';
        }

        if ($this->AM != ''){
            $car = str_split($this->AM);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
               if (is_numeric($car[$i])) {
                    $this->apem = 'El apellido materno no puede llevar numeros';
                } else {
                    $this->apem = '';
                }
            }
        }else{
            $this->apem = '';
        }

        $GRADOS = Grado::all();
        $ESP = Especialidad::all();
        return view('livewire.alumnos.ralumnos', ['grados' => $GRADOS, 'especialidad' => $ESP]);
    }

    public function mount()
    {
        $this->reseteo();
    }

    //metodo que valida en tiempo real

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
        $this->validate();

        if ($this->AUXTUT != null) {
            $this->AUXTUT  = $this->AUXTUT;
        } else {

            Padre::updateOrCreate(
                [
                    'Nombre' => $this->NOM,
                    'ApPaterno' => $this->APP,
                    'ApMaterno' => $this->APM,
                    'Telefono' => $this->CEL,
                ]
            );

            $newtutor = Padre::orderBy('id', 'desc')->first();
            $this->AUXTUT = $newtutor->id;
        }


        if ($this->AUXSEC != null) {
            $this->AUXSEC  = $this->AUXSEC;
        } else {

            Secundaria::updateOrCreate(
                [
                    'ClaveSecu' => $this->CLAVS,
                    'Nombre' => $this->NSEC,
                    'Modalidad' => $this->MODS,
                    'Regimen' => $this->REG,
                ]
            );

            $newsecundaria = Secundaria::orderBy('id', 'desc')->first();
            $this->AUXSEC = $newsecundaria->id;
        }


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
    public function redic()
    {
        return redirect()->route('Alumnos');
    }
}
