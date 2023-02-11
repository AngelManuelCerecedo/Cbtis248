<div>
    @if ($modal)
        @include('livewire.incidencias.modalEI')
    @endif
    @if ($modal1)
        @include('livewire.grupos.modalF')
    @endif
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="pt-8">
                <h1 class="text-4xl font-sans leading-tight text-center">INCIDENCIAS DEL GRUPO</h1>
                <br>
                <h1 class="text-4xl font-sans leading-tight text-center uppercase">{{ $grupo->Clave_Grupo }}</h1>
            </div>
            <!--DIV PADRE-->
            <div class="my-2 flex sm:flex-row flex-col pt-16">
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    @if ($incidencias->count())
                        <table class="min-w-full leading-normal font-sans text-center">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Fecha
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Ciclo Escolar
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Descripcion
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Registró
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sesansmibold text-gray-600 uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidencias as $incidencia)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $incidencia->Fecha }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $incidencia->ciclo->Semestre }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $incidencia->Descripcion }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $incidencia->user->Nombre }}
                                                {{ $incidencia->user->ApPaterno }} {{ $incidencia->user->ApMaterno }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">


                                            <button wire:click="editar({{ $incidencia->id }})" type="button"
                                                class="text-white border  bg-yellow-400 hover:bg-yellow-500 rounded-lg  text-sm  ml-0 py-2 px-6 m-1">Editar</button>



                                            <button wire:click="verificar({{ $incidencia->id }})" type="button"
                                                class="text-white border  bg-green-400 hover:bg-green-500 rounded-lg  text-sm  ml-0 py-2 px-6 m-1">Generar
                                                Citatorio</button>



                                            <button wire:click="borrar({{ $incidencia->id }})" type="button"
                                                class="text-white border  bg-red-400 hover:bg-red-500 rounded-lg  text-sm  ml-0 py-2 px-6 m-1">Eliminar</button>

                                        </td>
                                    </tr>
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
                    @if ($incidencias->hasPages())
                        <div class="px-6 py-3">
                            {{ $incidencias->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
