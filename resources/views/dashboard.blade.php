@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="mt-[20px] ml-66 text-[40px] text-center">
        Bienvenido
        <br>
        {{ auth()->user()->Nombre }} {{ auth()->user()->ApPaterno }} {{ auth()->user()->ApMaterno }}
        <br>
    </div>
    <div class="mt-28 ml-72">
        <img src="https://github.com/Darftgamer/LOGO-CBTIS/blob/main/PRINCIPAL.jpeg?raw=true" alt="" width="1000px"
            height="800px">
    </div>

    <div class="flex items-center mt-10 ">
        <div class="bg-white rounded-3xl border shadow-xl p-8 w-3/6">
            <div>
                <h3 class="font-semibold text-sm text-gray-400">Valores</h3>
                <h1 class="font-semibold text-xl text-gray-700">En el CBTis 248, impulsamos a los estudiantes en su educación con base en 4 pilares que consideramos fundamentales para su desarrollo:
                    Liderazgo
                    Vocación en el servicio
                    Trabajo en equipo
                    Orden y disciplina</h1>
            </div>
        </div>
    </div>
@endsection
