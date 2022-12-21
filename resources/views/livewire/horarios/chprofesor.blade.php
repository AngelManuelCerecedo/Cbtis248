<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 mt-4">

            <p class="text-4xl font-sans leading-tight text-center">SELECCION DE MATERIAS</p>
            <p class="text-4xl font-sans leading-tight text-center uppercase">PROFESOR : {{ $Profesor->Nombre }} </p>
            <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Materia</label>
                    <select wire:model='M'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona una Materia</option>
                        @foreach ($materias as $materia)
                            <option value="{{ $materia->id }}">{{ $materia->Nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Dia</label>
                    <select wire:model='D'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona un Dia</option>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miercoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Horas</label>
                    <select wire:model='H'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona una Hora</option>
                        <option value="7:30-8:20">7:30-8:20</option>
                        <option value="8:20-9:10">8:20-9:10</option>
                        <option value="9:10-10:00">9:10-10:00</option>
                        <option value="10:00-10:30">10:00-10:30</option>
                        <option value="10:30-11:20">10:30-11:20</option>
                        <option value="11:20-12:10">11:20-12:10</option>
                        <option value="12:10-13:00">12:10-13:00</option>
                        <option value="13:00-13:50">13:00-13:50</option>
                        <option value="13:50-14:00">13:50-14:00</option>
                    </select>
                </div>
                <div class=" flex flex-col md:ml-6">
                    <button
                        class="mt-8 font-sans leading-none text-white py-3 px-28 bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none"
                        wire:click="">
                        Añadir
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-24">
                @if ($materiashoras->count())
                    <table class="min-w-full leading-normal font-sans text-center">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                    HORA
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                    DIA
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                    MATERIA
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materiashoras as $materiashora)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $materiashora->pivot->Hora }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $materiashora->pivot->Dia }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $materiashora->Nombre }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-4">
                        <div class="flex font-sans bg-[#78163B] rounded-lg p-4 mb-4 text-sm text-white" role="alert">
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
            </div>
        </div>
    </div>
</div>
