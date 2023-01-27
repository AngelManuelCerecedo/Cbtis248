@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="mt-[20px] text-[50px] text-center">
        BIENVENIDO
        <br>
        <p class="uppercase">{{ auth()->user()->Nombre }} {{ auth()->user()->ApPaterno }} {{ auth()->user()->ApMaterno }} </p>
    </div>
    <div class="mt-[20px] ml-[265px]">
        <img src="https://github.com/Darftgamer/LOGO-CBTIS/blob/main/PRINCIPAL.jpeg?raw=true" alt="" width="1000px"
            height="800px">
    </div>

    <div class="min-w-screen mt-6 flex items-center justify-center ">
        <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 ">
    
                <div class="w-full ">
                    <div class="widget w-full p-4   rounded-lg bg-white border-l-8 border-red-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3 ">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>',
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-[45px]">Valores</div>
                            </div>
                        </div>
                        <p  class=" mt-2 text-[22px] text-justify">En el CBTis 248, impulsamos a los estudiantes en su educación con base en 4 pilares que consideramos fundamentales para su desarrollo:</p>
                        <p class=" mt-2 text-[20px] text-justify"> • Liderazgo <br> • Vocación en el servicio <br> • Trabajo en equipo <br> • Orden y disciplina</p>
                    </div>
                </div>
    
                <div class="w-full ">
                    <div class="widget w-full p-4  rounded-lg bg-white border-l-8 border-blue-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>',
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-[45px]">Visión</div>
                            </div>
                        </div>
                        <p  class=" mt-2 text-[22px] text-justify">Ser una institución de Educación Media Superior certificada, orientada al aprendizaje y desarrollo de conocimientos tecnológicos y humanísticos.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                    </div>
                </div>
    
                <div class="w-full ">
                    <div class="widget w-full p-4  rounded-lg bg-white border-l-8 border-yellow-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z"/>',
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-[45px]">Misión</div>
                            </div>
                        </div>
                        <p  class=" mt-2 text-[22.5px] text-justify">Formar personas con conocimientos tecnológicos en las áreas industrial, comercial y de servicios a través de la preparación de bachilleres y profesionales técnicos, con el fin de contribuir al desarrollo sustentable del país.</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
