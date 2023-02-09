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
    public $BSEC, $SUGS, $NSEC, $MODS, $CLAVS, $REG, $TUTS, $SECS;
    public $AUXTUT, $AUXSEC, $AUXTUT2, $AUXSEC2, $n,$nom, $apep, $apem, $nomt, $apept, $apemt;

    //validaciones
    protected $rules = [
        'NC' => 'required|digits_between:14,14',
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
        'NSS' => 'required|digits_between:11,11',
        'TS' => 'required',
        'EC' => 'required',
        'EM' => 'required|email',
        'T' => 'required|digits_between:10,10',
        'ESP' => 'required',
        'PROM' => 'required|numeric',
        'AF' => 'required',
        'EST' => 'required',


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
        'NC.required' => 'El campo número de control puede estar vacío',
        'NC.numeric' => 'Solo se aceptan numeros',
        'NC.digits_between' => 'Numero de control invalido',
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
        'NSS.digits_between' => 'Número de seguro social invalido',
        'TS.required' => 'El campo tipo de sangre no puede estar vacío',
        'EC.required' => 'El campo estado civil no puede estar vacío',
        'EM.required' => 'El campo correo electronico no puede estar vacío',
        'EM.email' => 'Correo electronico invalido',
        'T.required' => 'El campo correo telefono no puede estar vacío',
        'T.digits_between' => 'Telefono invalido',
        'ESP.required' => 'El campo especialidad no puede estar vacío',
        'PROM.required' => 'El campo promedio no puede estar vacío',
        'PROM.numeric' => 'Promedio invalido',
        'AF.required' => 'El campo año de finalización no puede estar vacío',
        'EST.required' => 'El campo estado no puede estar vacío',
        'NOM.required' => 'El campo nombre no puede estar vacío',
        'APP.required' => 'El campo apellido paterno no puede estar vacío',
        'APM.required' => 'El campo apellido materno no puede estar vacío',
        'CEL.required' => 'El campo correo telefono no puede estar vacío',
        'CEL.digits_between' => 'Telefono invalido',


        'NSEC.required' => 'El campo nombre no puede estar vacío',
        'CLAVS.required' => 'El campo clave de secundaria no puede estar vacío',
        'MODS.required' => 'El campo modalidad no puede estar vacío',
        'REG.required' => 'El campo regimen no puede estar vacío',


    ];



    public function render()
    {
        if ($this->C == '' && strlen($this->N) >= 2 && strlen($this->AP) >= 3 && strlen($this->AM) >= 2) {
            $carN = str_split($this->N);
            $carA = str_split($this->AP);
            $carM = str_split($this->AM);
            $curp = $carA[0];
            if (in_array ($carA[1], ['a','e','i','o','u'])) {
                $curp .= $carA[1]; 
            }
            else {
                $curp .= $carA[2];
            }
            $curp .= $carM[0];
            $curp .= $carN[0];
            if (
                strtoupper($curp) == 'PENE' || strtoupper($curp) == 'CACA' || strtoupper($curp) == 'CAGA' || strtoupper($curp) == 'CAKA' || strtoupper($curp) == 'COGE' || strtoupper($curp) == 'COJE' || strtoupper($curp) == 'FETO' || strtoupper($curp) == 'COJO'
                || strtoupper($curp) == 'JOTO' || strtoupper($curp) == 'KACO' || strtoupper($curp) == 'KAGO' || strtoupper($curp) == 'KACO' || strtoupper($curp) == 'KOJO' || strtoupper($curp) == 'CULO' || strtoupper($curp) == 'KULO'
                || strtoupper($curp) == 'MAMO' || strtoupper($curp) == 'MEAS' || strtoupper($curp) == 'MION' || strtoupper($curp) == 'MULA' || strtoupper($curp) == 'PEDO' || strtoupper($curp) == 'PUTA' || strtoupper($curp) == 'QULO'
                || strtoupper($curp) == 'RUIN' || strtoupper($curp) == 'BUEY' || strtoupper($curp) == 'COJA' || strtoupper($curp) == 'COJI' || strtoupper($curp) == 'GUEY' || strtoupper($curp) == 'KACA' || strtoupper($curp) == 'KOGE'
                || strtoupper($curp) == 'MOCO' || strtoupper($curp) == 'PEDA' || strtoupper($curp) == 'RATA' || strtoupper($curp) == 'PUTO' || strtoupper($curp) == 'CACO' || strtoupper($curp) == 'CAGO' || strtoupper($curp) == 'MAME'
                || strtoupper($curp) == 'MEAR' || strtoupper($curp) == 'PIPI' || strtoupper($curp) == 'POPO' || strtoupper($curp) == 'PITO' || strtoupper($curp) == 'PEDO'
            ) {
                $ncurp =str_split($curp);
                $ncurp[1] = 'X';
                $nncurp = $ncurp[0];
                $nncurp .= $ncurp[1];
                $nncurp .= $ncurp[2];
                $nncurp .= $ncurp[3];
                $this->C = strtoupper($nncurp);
            } else {
                $this->C = strtoupper($curp);
            }
        }
        if($this->N == '' || $this->AP == '' || $this->AM == ''){
            $this->C = '';
        }
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

        //tutor

        if ($this->NOM != ''){
            $car = str_split($this->NOM);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
               if (is_numeric($car[$i])) {
                    $this->nomt = 'El nombre no puede llevar numeros';
                } else {
                    $this->nomt = '';
                }
            }
        }else{
            $this->nomt = '';
        }

        if ($this->APP != ''){
            $car = str_split($this->APP);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
               if (is_numeric($car[$i])) {
                    $this->apept = 'El apellido paterno no puede llevar numeros';
                } else {
                    $this->apept = '';
                }
            }
        }else{
            $this->apept = '';
        }

        if ($this->APM != ''){
            $car = str_split($this->APM);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
               if (is_numeric($car[$i])) {
                    $this->apemt = 'El apellido materno no puede llevar numeros';
                } else {
                    $this->apemt = '';
                }
            }
        }else{
            $this->apemt = '';
        }



        //


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


        if ($alumno->grado_id == null) {
            $this->G = '';
        } else {
            $grado = Grado::where('id', $alumno->grado_id)->first();
            $this->G = $grado->id;
        }


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

    public function actualizar()
    {
        $this->validate();

        if ($this->AUXTUT == null) {

            $comporbartutor = Padre::Where('id', $this->AUXTUT2)->first();

            $comprobarnom = $comporbartutor->Nombre;
            $comprobarapp = $comporbartutor->ApPaterno;
            $comprobarapm = $comporbartutor->ApMaterno;
            $comprobartel = $comporbartutor->Telefono;

            if ($comprobarnom ==  $this->NOM &&   $comprobarapp == $this->APP && $comprobarapm ==  $this->APM && $comprobartel == $this->CEL) {
                $tutor = $this->AUXTUT2;
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

                $tutor = $newtutor->id;
            }
        } else {
            $tutor = $this->AUXTUT;
        }

        if ($this->AUXSEC == null) {

            $comporbarsec = Secundaria::Where('id', $this->AUXSEC2)->first();

            $comprobarNSEC = $comporbarsec->Nombre;
            $comprobarMODS = $comporbarsec->Modalidad;
            $comprobarREG = $comporbarsec->Regimen;
            $comprobarCLAVS = $comporbarsec->ClaveSecu;

            if ($comprobarNSEC  ==  $this->NSEC &&  $comprobarMODS == $this->MODS && $comprobarREG == $this->REG && $comprobarCLAVS == $this->CLAVS) {
                $secundaria = $this->AUXSEC2;
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
                $secundaria = $newsecundaria->id;
            }
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
