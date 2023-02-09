<?php

namespace App\Http\Livewire\Administrador;

use App\Models\User;
use Livewire\Component;

class Radministrador extends Component
{
    public $N, $AP, $AM, $RFC, $CC, $P, $FI, $FID, $FIS, $CAT, $NT, $HN, $NP, $O, $C, $E, $PS,$TD, $PT, $PA;

    public $cr, $rfc ,$nom, $apep, $apem;

     //VALIDACIONES
     protected $rules = [
        'N' => 'required',
        'AP' => 'required',
        'AM' => 'required',
        'C' => 'required|min:18|max:18',
        'RFC' => 'required|min:13|max:13',
        'CC' => 'required',
        'CAT' => 'required',
        'FI' => 'required',
        'FID' => 'required',
        'FIS' => 'required',
        'NP' => 'required',
        'HN' => 'required|numeric',
        'NT' => 'required|numeric',
        'PA' => 'required',
        'P' => 'required',
        'O' => 'required',
        'PT' => 'required',
        'TD' => 'required',
        'E' => 'required|email',
    ];

    //MENSAJES DE ERRORES
    protected $messages = [
        'N.required' => 'El campo nombre no puede estar vacío',
        'AP.required' => 'El campo apellido paterno no puede estar vacío',
        'AM.required' => 'El campo apellido materno no puede estar vacío',
        'C.required' => 'El campo curp no puede estar vacío',
        'C.min' => 'Curp invalida',
        'C.max' => 'Curp invalida',
        'RFC.required' => 'El campo rfc no puede estar vacío',
        'RFC.min' => 'RFC invalida',
        'RFC.max' => 'RFC invalida',
        'CC.required' => 'El campo clave de cobro no puede estar vacío',
        'CAT.required' => 'El campo categoría no puede estar vacío',
        'FI.required' => 'El campo fecha de ingreso no puede estar vacío',
        'FID.required' => 'El campo fecha de ingreso al DGETI no puede estar vacío',
        'FIS.required' => 'El campo fecha de ingreso a la SEP no puede estar vacío',
        'NP.required' => 'El campo número de plaza no puede estar vacío',
        'HN.required' => 'El campo horas de nombramiento no puede estar vacío',
        'HN.numeric' => 'Horas de nombramiento no validas',
        'NT.required' => 'El campo número de tarjeta no puede estar vacío',
        'NT.numeric' => 'Número de tarjeta no valido',
        'PA.required' => 'El campo perfil abreviado no puede estar vacío',
        'P.required' => 'El campo perfil no puede estar vacío',
        'O.required' => 'El campo observaciones no puede estar vacío',
        'PT.required' => 'El campo puesto no puede estar vacío',
        'TD.required' => 'El campo tipo de personal no puede estar vacío',
        'E.required' => 'El campo correo electronico no puede estar vacío',
        'E.email' => 'Correo electronico invalido',
       
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
            $this->RFC = '';
        }
        if (strlen($this->C) <= 10){
            $this->RFC = $this->C;
        }
        if ($this->C != ''){
            $car = str_split($this->C);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
                if ($i>3){ break;}
               if (is_numeric($car[$i])) {
                    $this->cr = 'La curp no debe empezar con numeros';
                } else {
                    $this->cr = '';
                }
            }
        }else{
            $this->cr = '';
        }

        if ($this->RFC != ''){
            $car = str_split($this->RFC);
            $longitud = count($car);
            for ($i = 0 ; $i < $longitud ; $i++){
                if ($i>3){ break;}
               if (is_numeric($car[$i])) {
                    $this->rfc = 'El RFC no debe empezar con numeros';
                } else {
                    $this->rfc = '';
                }
            }
        }else{
            $this->rfc = '';
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


        return view('livewire.administrador.radministrador');
    }

     //metodo que valida en tiempo real
     public function updated($propertyName)
     {
         $this->validateOnly($propertyName);
     }

    public function registrar()
    {
        $this->validate();
        User::updateOrCreate([
            'Estatus' => 'Activo',
            'EstatusUser' => 'Inactivo',
            'email' => $this->E,
            'Curp' => $this->C,
            'Nombre' => $this->N,
            'ApPaterno' => $this->AP,
            'ApMaterno' => $this->AM,
            'Rfc' => $this->RFC,
            'Clave_Cobro' => $this->CC,
            'Puesto' => $this->PT,
            'Perfil_A' => $this->PA,
            'Perfil' => $this->P,
            'Fecha_ingreso' => $this->FI,
            'Fecha_ingreso_SEP' => $this->FIS,
            'Fecha_ingreso_DGETI' => $this->FID,
            'Categoria' => $this->CAT,
            'Numero_Tarjeta' => $this->NT,
            'Horas_Nom' => $this->HN,
            'Numero_Plaza' => $this->NP,
            'Observaciones' => $this->O,
            'Tipo' => $this->TD,
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
        $this->C = '';
        $this->N = '';
        $this->AP = '';
        $this->AM = '';
        $this->RFC = '';
        $this->CC = '';
        $this->PA = '';
        $this->P = '';
        $this->FI = '';
        $this->FIS = '';
        $this->FID = '';
        $this->CAT = '';
        $this->NT = '';
        $this->HN = '';
        $this->NP = '';
        $this->O = '';
        $this->TD = '';
    }
    public function redic(){
        return redirect()->route('BuscarAdministrador');
    }
}

