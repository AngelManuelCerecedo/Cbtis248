<div>
    @if ($modalAÑ)
        @include('livewire.grupos.modalAa')
    @endif
    @if ($modalLA)
        @include('livewire.grupos.modalLa')
    @endif
    @if ($modalAG)
        @include('livewire.grupos.modalAg')
    @endif
    @if ($modal)
        @include('livewire.grupos.modalRG')
    @endif
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="pt-8">
                <h1 class="text-4xl font-sans leading-tight text-center">GRUPOS</h1>
            </div>
            <!--DIV PADRE-->
            <div class="my-2 flex sm:flex-row flex-col pt-16">
                <!--DIV SEARCH-->
                <div class="block">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                    </span>
                    <input placeholder="Buscar" wire:model='search'
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-2 sm:mr-16 md:mr-64 lg:mr-96 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>
                <!--DIV FILTRO & CANTIDAD-->
                <div class="flex flex-row mb-1 sm:mb-0  lg:pr-4 xl:pl-96">
                    <div class="sm:pl-0 sm:mr-0 xl:pl-32">
                        <select wire:model='cantidad'
                            class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 sm:py-0 sm:px-2 sm:pr-8 md:py-2 md:px-4 md:pr-8 lg:mx-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    @if ($grupos->count())
                        <table class="min-w-full leading-normal font-sans text-center">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Clave de Grupo
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Especialidad
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Salon
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Grado
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Estatus
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sesansmibold text-gray-600 uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grupos as $grupo)
                                @if ($grupo->Clave_Grupo != 'Sin Grupo')
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $grupo->Clave_Grupo }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $grupo->especialidad->Nombre }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $grupo->Salon }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $grupo->grado->Nombre }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $grupo->Estatus }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                                            @can('Añadir-Alumnos')
                                                <a>
                                                    @if ($grupo->TotAL > $grupo->ALR)
                                                        <button wire:click="añadirA({{ $grupo->id }})" type="button"
                                                            class="text-white bg-[#4eb553]  rounded-lg  text-sm  ml-10 py-2 px-6 m-1">Añadir
                                                            Alumnos</button>
                                                    @else
                                                    @endif
                                                </a>
                                            @endcan



                                            @can('Listar-Alumnos')
                                                <a>
                                                    <button wire:click="listarA({{ $grupo->id }})" type="button"
                                                        class="text-white bg-[#3065AC]  rounded-lg text-sm  ml-10 py-2 px-6 m-1">Lista
                                                        de Alumnos</button>
                                                </a>
                                            @endcan

                                            <br>

                                            @can('Editar-Grupo')
                                                <a>
                                                    <button wire:click="editar({{ $grupo->id }})" type="button"
                                                        class="text-white bg-yellow-400  rounded-lg text-sm  ml-11   py-2 px-9 m-1">
                                                        Editar Grupo </button>
                                                </a>
                                            @endcan

                                            @can('Actualizar-Grados')
                                                <a>
                                                    <button wire:click="listarAg({{ $grupo->id }})" type="button"
                                                        class="text-white bg-[#6C4675]  rounded-lg text-sm  ml-10 py-2 px-7 m-1">Actualizar
                                                        Grado</button>
                                                </a>
                                            @endcan

                                            <br>

                                            @can('Eliminar-Grupos')
                                                <button wire:click="borrar({{ $grupo->id }})" type="button"
                                                    class="text-white bg-red-400 rounded-lg  text-sm ml-4 py-2 px-6 ">
                                                    Eliminar Grupo
                                                </button>
                                            @endcan
                                        </td>
                                    </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            <div class="flex font-sans bg-[#78163B] rounded-lg p-4 mb-4 text-sm text-white"
                                role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium">Info: </span> No se encontró ningún registro.
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($grupos->hasPages())
                        <div class="px-6 py-3">
                            {{ $grupos->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center w-full mb-10">

            @can('Registrar-Grupo')
                <button
                    class="font-sans leading-none text-white py-4 px-10 bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none"
                    wire:click='crearmodal()'>
                    Registrar Grupo
                </button>
            @endcan
        </div>
    </div>
</div>
