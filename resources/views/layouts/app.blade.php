<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-[#e0e6ec] font-sans">

    <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
        <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>

    <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-[#78163B] shadow h-screen">
        <!-- Imagen TOP -->
        <div class="text-white text-xl">
            <div class="p-0 mt-0 flex items-center rounded-md ">
                <img src="https://github.com/Darftgamer/LOGO-CBTIS/blob/main/CBTIS248.png?raw=true" alt="logo_Cbtis248"
                    class="w-21">
                <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <!-- LINEA -->
            <hr class="my-2 text-white">
            <!-- INICIO -->
            <div>
                @can('dashboard')
                    <a href="{{ route('dashboard') }}">
                        <div
                            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  
                    hover:bg-[#D5C28B]">
                            <i class="bi bi-house"></i>
                            <span class="text-[20px] ml-4 text-white">Inicio</span>
                        </div>
                    </a>
                @endcan

                @can('Control-Escolar')
                    @can('Control-Escolar')
                        <!-- ALUMNO -->
                        <span class="rotate-180" id="arrow1">
                            <div
                                class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                                <i class="bi bi-mortarboard"></i>
                                <div class="flex justify-between w-full items-center" onclick="dropDown1()">
                                    <span class="text-[20px] ml-4 text-gray-200">Control Escolar</span>
                                </div>
                            </div>
                        </span>
                    @endcan
                    <div class=" leading-7 text-left text-[18px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloAlumno">
                        @can('Alumnos')
                            <a href="{{ route('Alumnos') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Alumnos</h1>
                            </a>
                        @endcan
                        @can('Tutores')
                            <a href="{{ route('Padres') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Tutores</h1>
                            </a>
                        @endcan
                        @can('Secundarias')
                            <a href="{{ route('Secundarias') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Secundarias</h1>
                            </a>
                        @endcan
                        @can('Incidencias')
                            <a href="{{ route('Incidencias') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Crear Incidencias</h1>
                            </a>
                        @endcan
                    </div>
                @endcan

                @can('Personal')

                    @can('Personal')
                        <!-- PERSONAL -->
                        <div
                            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                            <i class="bi bi-person"></i>
                            <div class="flex justify-between w-full items-center" onclick="dropDown2()">
                                <span class="text-[20px] ml-4 text-gray-200">Personal</span>
                                <span class="text-sm rotate-180" id="arrow2"></span>
                            </div>
                        </div>
                    @endcan

                    @can('Personal-Catalogo')
                        <div class=" leading-7 text-left text-[18px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloPersonal">
                            <a href="{{ route('BuscarAdministrador') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Personal</h1>
                            </a>
                        </div>
                    @endcan
                @endcan

                @can('Horarios')
                    @can('Horarios')
                        <!-- HORARIOS -->
                        <div
                            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                            <i class="bi bi-clock-history"></i>
                            <div class="flex justify-between w-full items-center" onclick="dropDown3()">
                                <span class="text-[20px] ml-4 text-gray-200">Horarios</span>
                                <span class="text-sm rotate-180" id="arrow3"></span>
                            </div>
                        </div>
                    @endcan

                    <div class=" leading-7 text-left text-[18px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloHorario">
                        @can('Horario-Docente')
                            <a href="{{ route('Horarios') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Crear Horario Docente
                                </h1>
                            </a>
                        @endcan

                        @can('Horario-Grupos')
                            <a href="{{ route('HorariosG') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Horario Grupo</h1>
                            </a>
                        @endcan
                    </div>

                @endcan


                @can('Materias')

                    @can('Materias')
                        <!-- MATERIAS & ACTIVIDAD COMPLEMENTARIA -->
                        <div
                            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                            <i class="bi bi-book"></i>
                            <div class="flex justify-between w-full items-center" onclick="dropDown4()">
                                <span class="text-[20px] ml-4 text-gray-200">Materias</span>
                                <span class="text-sm rotate-180" id="arrow4"></span>
                            </div>
                        </div>
                    @endcan

                    <div class=" leading-7 text-left text-[18px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloMateria">

                        @can('Ver-Materias')
                            <a href="{{ route('Materias') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Materias</h1>
                            </a>
                        @endcan


                        @can('Ver-Actividades-Complementarias')
                            <a href="{{ route('Actividades') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Actividades
                                    Complementarias</h1>
                            </a>
                        @endcan
                    </div>

                @endcan



                @can('Grupos')
                    @can('Grupos')
                        <!-- GRUPOS -->
                        <div
                            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                            <i class="bi bi-diagram-3"></i>
                            <div class="flex justify-between w-full items-center" onclick="dropDown5()">
                                <span class="text-[20px] ml-4 text-gray-200">Grupos</span>
                                <span class="text-sm rotate-180" id="arrow5"></span>
                            </div>
                        </div>
                    @endcan

                    <div class=" leading-7 text-left text-[18px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloGrupo">

                        @can('Ver-Grupos')
                            <a href="{{ route('Grupos') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Grupos</h1>
                            </a>
                        @endcan
                    </div>
                @endcan


                @can('Ciclo-Escolar')

                    @can('Ciclo-Escolar')
                        <!-- CICLO ESCOLAR -->
                        <div
                            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                            <i class="bi bi-alarm"></i>
                            <div class="flex justify-between w-full items-center" onclick="dropDown7()">
                                <span class="text-[20px] ml-4 text-gray-200">Ciclo Escolar</span>
                                <span class="text-sm rotate-180" id="arrow7"></span>
                            </div>
                        </div>
                    @endcan

                    <div class=" leading-7 text-left text-[18px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloCiclos">
                        @can('Ver-Ciclo-Escolar')
                            <a href="{{ route('Ciclo') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Ciclo Escolar</h1>
                            </a>
                        @endcan

                    </div>
                @endcan

                @can('Usuarios')

                    @can('Usuarios')
                        <!-- Usuarios-->
                        <div
                            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                            <i class="bi bi-person"></i>
                            <div class="flex justify-between w-full items-center" onclick="dropDown6()">
                                <span class="text-[20px] ml-4 text-gray-200">Usuarios</span>
                                <span class="text-sm rotate-180" id="arrow6"></span>
                            </div>
                        </div>
                    @endcan

                    <div class=" leading-7 text-left text-[18px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloUsuarios">
                        @can('Ver-Usuarios')
                            <a href="{{ route('Usuarios.index') }}">
                                <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Gestionar Usuarios</h1>
                            </a>
                        @endcan

                    </div>
                @endcan





                <!-- CERRAR SESION -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <div
                        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <x-jet-dropdown-link class="text-gray-200 text-[20px]" href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">
                            {{ __('Cerrar Sesión') }}
                        </x-jet-dropdown-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="content mx-20 lg:ml-80 lg:mr-5">
        @yield('content')
    </div>
    @stack('modals')
    <script>
        function dropDown1() {
            document.querySelector('#submoduloAlumno').classList.toggle('hidden')
            document.querySelector('#arrow1').classList.toggle('rotate-0')
        }
        dropDown1()

        function dropDown2() {
            document.querySelector('#submoduloPersonal').classList.toggle('hidden')
            document.querySelector('#arrow2').classList.toggle('rotate-0')
        }
        dropDown2()

        function dropDown3() {
            document.querySelector('#submoduloHorario').classList.toggle('hidden')
            document.querySelector('#arrow3').classList.toggle('rotate-0')
        }
        dropDown3()

        function dropDown4() {
            document.querySelector('#submoduloMateria').classList.toggle('hidden')
            document.querySelector('#arrow4').classList.toggle('rotate-0')
        }
        dropDown4()

        function dropDown5() {
            document.querySelector('#submoduloGrupo').classList.toggle('hidden')
            document.querySelector('#arrow5').classList.toggle('rotate-0')
        }
        dropDown5()

        function dropDown6() {
            document.querySelector('#submoduloUsuarios').classList.toggle('hidden')
            document.querySelector('#arrow6').classList.toggle('rotate-0')
        }

        dropDown6()

        function dropDown7() {

            document.querySelector('#submoduloCiclos').classList.toggle('hidden')
            document.querySelector('#arrow7').classList.toggle('rotate-0')
        }
        dropDown7()

        function Openbar() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
    </script>
    @livewireScripts
    @yield('js')
    <!-- Alertas, sin instalacion, solo con ruta del navegador: https://sweetalert2.github.io/#download -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
