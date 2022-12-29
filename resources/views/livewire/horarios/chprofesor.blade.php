<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 mt-4">

            <p class="text-4xl font-sans leading-tight text-center">SELECCION DE MATERIAS</p>
            <p class="text-4xl font-sans leading-tight text-center uppercase">PROFESOR : {{ $Profesor->Nombre }}
                {{ $Profesor->ApPaterno }} {{ $Profesor->ApMaterno }} </p>
            <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Materia</label>
                    <select wire:model='M'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona una Materia</option>
                        @foreach ($materias as $materia)
                            @if ($materia->profesor_id == $Profesor->id)
                                <option value="{{ $materia->id }}">{{ $materia->Nombre }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Dia</label>
                    <select wire:model='D'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona un Dia</option>
                        @foreach ($dias as $dia)
                            <option value="{{ $dia->id }}">{{ $dia->Dia }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Horas</label>
                    <select wire:model='H'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona una Hora</option>
                        @foreach ($horas as $hora)
                            <option value="{{ $hora->id }}">{{ $hora->Hora }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" flex flex-col md:ml-6">
                    <button
                        class="mt-8 font-sans leading-none text-white py-3 px-28 bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none"
                        wire:click="añadir()">
                        Añadir
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-24">

                <table class="min-w-full leading-normal font-sans text-center">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                HORA
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                LUNES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                MARTES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                MIERCOLES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                JUEVES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                VIERNES
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $horario->hora->Hora }}</p>
                                    <th class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $horario->materia->Nombre }}</p>
                                    </th>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
