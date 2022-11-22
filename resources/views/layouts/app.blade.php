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

<body class="bg-[#e0e6ec] font-[Poppins]">

    <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
        <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>

    <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-[#78163B] shadow h-screen">
        <!-- Imagen TOP -->
        <div class="text-white text-xl">
            <div class="p-0 mt-0 flex items-center rounded-md ">
                <img src="https://github.com/Darftgamer/LOGO-CBTIS/blob/main/CBTIS248.png?raw=true" alt="logo_Cbtis248" class="w-21">
                <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <!-- LINEA -->
            <hr class="my-2 text-white">
            <!-- INICIO -->
            <div>
                <a href="{{ route('dashboard') }}">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  
                    hover:bg-[#D5C28B]">
                        <i class="bi bi-house"></i>
                        <span class="text-[20px] ml-4 text-white">Inicio</span>
                    </div>
                </a>
                <!-- ALUMNO -->
                <span class="rotate-180" id="arrow1">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                        <i class="bi bi-mortarboard"></i>
                        <div class="flex justify-between w-full items-center" onclick="dropDown1()">
                            <span class="text-[20px] ml-4 text-gray-200">Alumnos</span>
                        </div>
                    </div>
                </span>
                <div class=" leading-7 text-left text-[15px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloAlumno">
                    <a href="{{route('BuscarAlumnos')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Buscar Alumno</h1>
                    </a>
                    <a href="{{route('RegistrarAlumnos')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Registrar Alumno</h1>
                    </a>
                    <a href="{{route('Cincidencia')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Crear Incidencias</h1>
                    </a>
                </div>

                <!-- PERSONAL -->
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                    <i class="bi bi-person"></i>
                    <div class="flex justify-between w-full items-center" onclick="dropDown2()">
                        <span class="text-[20px] ml-4 text-gray-200">Personal</span>
                        <span class="text-sm rotate-180" id="arrow2"></span>
                    </div>
                </div>

                <div class=" leading-7 text-left text-[15px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloPersonal">
                    <a href="{{route('BuscarPersonal')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Buscar Personal</h1>
                    </a>
                    <a href="{{route('RegistrarPersonal')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Registrar Personal</h1>
                    </a>
                </div>

                <!-- HORARIOS -->
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                    <i class="bi bi-clock-history"></i>
                    <div class="flex justify-between w-full items-center" onclick="dropDown3()">
                        <span class="text-[20px] ml-4 text-gray-200">Horarios</span>
                        <span class="text-sm rotate-180" id="arrow3"></span>
                    </div>
                </div>

                <div class=" leading-7 text-left text-[15px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloHorario">
                    <a href="">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Crear Horario Grupo</h1>
                    </a>
                    <a href="">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Crear Horario Profesor</h1>
                    </a>
                </div>

                <!-- MATERIAS & ACTIVIDAD COMPLEMENTARIA -->
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                    <i class="bi bi-book"></i>
                    <div class="flex justify-between w-full items-center" onclick="dropDown4()">
                        <span class="text-[20px] ml-4 text-gray-200">Materias</span>
                        <span class="text-sm rotate-180" id="arrow4"></span>
                    </div>
                </div>

                <div class=" leading-7 text-left text-[15px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloMateria">
                    <a href="{{route('BuscarMaterias')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Buscar Materia</h1>
                    </a>
                    <a href="{{route('RegistrarMaterias')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Registrar Materia</h1>
                    </a>
                    <a href="{{route('BuscarActividades')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Buscar Actividad Complementaria</h1>
                    </a>
                    <a href="{{route('RegistrarActividades')}}">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Registrar Actividad Complementaria</h1>
                    </a>
                </div>

                <!-- GRUPOS -->
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                    <i class="bi bi-diagram-3"></i>
                    <div class="flex justify-between w-full items-center" onclick="dropDown5()">
                        <span class="text-[20px] ml-4 text-gray-200">Grupos</span>
                        <span class="text-sm rotate-180" id="arrow5"></span>
                    </div>
                </div>

                <div class=" leading-7 text-left text-[15px] font-[Poppins]mt-2 w-4/5 mx-auto" id="submoduloGrupo">
                    <a href="">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Buscar Grupo</h1>
                    </a>
                    <a href="">
                        <h1 class="cursor-pointer p-2 hover:bg-[#D5C28B] rounded-md  ml-5 mt-1">Crear Grupo</h1>
                    </a>
                </div>

                <!-- CERRAR SESION -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-[#D5C28B]">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <x-jet-dropdown-link class="text-gray-200 text-[20px]" href="{{ route('logout') }}" @click.prevent="$root.submit();">
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