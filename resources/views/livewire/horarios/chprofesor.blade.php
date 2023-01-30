<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 ">

            <p class="text-4xl font-sans leading-tight text-center">SELECCION DE MATERIAS</p>
            <p class="text-4xl font-sans leading-tight text-center uppercase">DOCENTE : {{ $Profesor->Nombre }}
                {{ $Profesor->ApPaterno }} {{ $Profesor->ApMaterno }} </p>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Materia/Actividad</label>
                    <select wire:model='M'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="">Seleciona una Materia/Actividad</option>
                        @foreach ($materias as $materia)
                            @if ($materia->profesor_id == $Profesor->id && $materia->Horas_Sem != $materia->Horas_Reg)
                                <option value="{{ $materia->id }}">{{ $materia->Nombre }} GRUPO:
                                    {{ $materia->grupo->Clave_Grupo }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('M')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Dia</label>
                    <select wire:model='D'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="">Seleciona un Dia</option>
                        @foreach ($dias as $dia)
                            <option value="{{ $dia->id }}">{{ $dia->Dia }}</option>
                        @endforeach
                    </select>
                    @error('D')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Horas</label>
                    <select wire:model='H'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="">Seleciona una Hora</option>
                        @foreach ($horas as $hora)
                            <option value="{{ $hora->id }}">{{ $hora->Hora }}</option>
                        @endforeach
                    </select>
                    @error('H')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Lugar</label>
                    <select wire:model='L'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="">Seleciona un Lugar</option>
                        <option value="Salon">Salon</option>
                        <option value="Taller A.R.H.">Taller A.R.H.</option>
                        <option value="Taller S.H.">Taller S.H.</option>
                        <option value="Taller A.B.">Taller A.B</option>
                        <option value="Aula Ingles">Aula de Ingles</option>
                        <option value="Centro de Computo">Centro de Computo</option>
                        <option value="Laboratorio">Laboratorio Multiple</option>
                        <option value="Biblioteca">Biblioteca</option>
                        <option value="Area Verde">Area Verde</option>
                    </select>
                    @error('L')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class=" flex flex-col md:ml-6">
                    <button
                        class="mt-8 font-sans leading-none text-white py-3 px-28 bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none"
                        wire:click="añadir()">
                        Añadir
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-10">
                <table class="min-w-full leading-normal font-sans text-center border">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                                HORA
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                                LUNES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                                MARTES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                                MIERCOLES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                                JUEVES
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                                VIERNES
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">7:30-8:20</td>
                            @for ($p = 0; $p < 5; $p++)
                                @if (!empty($Phoras) && $Phoras != '[]')
                                    @foreach ($Phoras as $Phora)
                                        @for ($i; $i < 6; $i++)
                                            @if ($Phora->dia_id == $i)
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $Phora->materia->Nombre }}
                                                        ({{ $Phora->grupo->Clave_Grupo }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                        ({{ $Phora->Lugar }})
                                                    </p>
                                                    <button wire:click="borrar({{ $Phora->id }})" type="button"
                                                        class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                            class="bi bi-trash-fill"></i></button>
                                                </td>
                                                <var {{ $i++ }}></var>
                                            @break

                                        @else
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">8:20-9:10</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Shoras) && $Shoras != '[]')
                                @foreach ($Shoras as $Shora)
                                    @for ($is; $is < 6; $is++)
                                        @if ($Shora->dia_id == $is)
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Shora->materia->Nombre }}
                                                    ({{ $Shora->grupo->Clave_Grupo }})
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Shora->Lugar }})
                                                </p>
                                                <button wire:click="borrar({{ $Shora->id }})" type="button"
                                                    class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                        class="bi bi-trash-fill"></i></button>
                                            </td>
                                            <var {{ $is++ }}></var>
                                        @break

                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">9:10-10:00</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Thoras) && $Thoras != '[]')
                            @foreach ($Thoras as $Thora)
                                @for ($it; $it < 6; $it++)
                                    @if ($Thora->dia_id == $it)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Thora->materia->Nombre }}
                                                ({{ $Thora->grupo->Clave_Grupo }})
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $Thora->Lugar }})
                                            </p>
                                            <button wire:click="borrar({{ $Thora->id }})" type="button"
                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                    class="bi bi-trash-fill"></i></button>
                                        </td>
                                        <var {{ $it++ }}></var>
                                    @break

                                @else
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                    </td>
                                @endif
                            @endfor
                        @endforeach
                    @else
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">10:00-10:30</td>
                @for ($p = 0; $p < 5; $p++)
                    @if (!empty($Qhoras) && $Qhoras != '[]')
                        @foreach ($Qhoras as $Qhora)
                            @for ($iq; $iq < 6; $iq++)
                                @if ($Qhora->dia_id == $iq)
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $Qhora->materia->Nombre }}
                                            ({{ $Qhora->grupo->Clave_Grupo }})
                                        </p>
                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                            ({{ $Qhora->Lugar }})
                                        </p>
                                        <button wire:click="borrar({{ $Qhora->id }})" type="button"
                                            class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </td>
                                    <var {{ $iq++ }}></var>
                                @break

                            @else
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                </td>
                            @endif
                        @endfor
                    @endforeach
                @else
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                @endif
            @endfor
        </tr>
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">10:30-11:20</td>
            @for ($p = 0; $p < 5; $p++)
                @if (!empty($Choras) && $Choras != '[]')
                    @foreach ($Choras as $Chora)
                        @for ($ic; $ic < 6; $ic++)
                            @if ($Chora->dia_id == $ic)
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $Chora->materia->Nombre }}
                                        ({{ $Chora->grupo->Clave_Grupo }})
                                    </p>
                                    <p class="text-gray-900 whitespace-no-wrap uppercase">
                                        ({{ $Chora->Lugar }})
                                    </p>
                                    <button wire:click="borrar({{ $Chora->id }})" type="button"
                                        class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                            class="bi bi-trash-fill"></i></button>
                                </td>
                                <var {{ $ic++ }}></var>
                            @break

                        @else
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                            </td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
            @endif
        @endfor
    </tr>
    <tr>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">11:20-12:10</td>
        @for ($p = 0; $p < 5; $p++)
            @if (!empty($SEhoras) && $SEhoras != '[]')
                @foreach ($SEhoras as $SEhora)
                    @for ($ise; $ise < 6; $ise++)
                        @if ($SEhora->dia_id == $ise)
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $SEhora->materia->Nombre }}
                                    ({{ $SEhora->grupo->Clave_Grupo }})
                                </p>
                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                    ({{ $SEhora->Lugar }})
                                </p>
                                <button wire:click="borrar({{ $SEhora->id }})" type="button"
                                    class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                        class="bi bi-trash-fill"></i></button>
                            </td>
                            <var {{ $ise++ }}></var>
                        @break

                    @else
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                        </td>
                    @endif
                @endfor
            @endforeach
        @else
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
        @endif
    @endfor
</tr>
<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">12:10-13:00</td>
    @for ($p = 0; $p < 5; $p++)
        @if (!empty($SIhoras) && $SIhoras != '[]')
            @foreach ($SIhoras as $SIhora)
                @for ($isi; $isi < 6; $isi++)
                    @if ($SIhora->dia_id == $isi)
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $SIhora->materia->Nombre }}
                                ({{ $SIhora->grupo->Clave_Grupo }})
                            </p>
                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                ({{ $SIhora->Lugar }})
                            </p>
                            <button wire:click="borrar({{ $SIhora->id }})" type="button"
                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                    class="bi bi-trash-fill"></i></button>
                        </td>
                        <var {{ $isi++ }}></var>
                    @break

                @else
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                    </td>
                @endif
            @endfor
        @endforeach
    @else
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
    @endif
@endfor
</tr>
<tr>
<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">13:00-13:50</td>
@for ($p = 0; $p < 5; $p++)
    @if (!empty($Ohoras) && $Ohoras != '[]')
        @foreach ($Ohoras as $Ohora)
            @for ($io; $io < 6; $io++)
                @if ($Ohora->dia_id == $io)
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{ $Ohora->materia->Nombre }}
                            ({{ $Ohora->grupo->Clave_Grupo }})
                        </p>
                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                            ({{ $Ohora->Lugar }})
                        </p>
                        <button wire:click="borrar({{ $Ohora->id }})" type="button"
                            class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                class="bi bi-trash-fill"></i></button>
                    </td>
                    <var {{ $io++ }}></var>
                @break

            @else
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                </td>
            @endif
        @endfor
    @endforeach
@else
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
@endif
@endfor
</tr>
<tr>
<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">13:50-14:40</td>
@for ($p = 0; $p < 5; $p++)
@if (!empty($Nhoras) && $Nhoras != '[]')
    @foreach ($Nhoras as $Nhora)
        @for ($in; $in < 6; $in++)
            @if ($Nhora->dia_id == $in)
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                    <p class="text-gray-900 whitespace-no-wrap">
                        {{ $Nhora->materia->Nombre }}
                        ({{ $Nhora->grupo->Clave_Grupo }})
                    </p>
                    <p class="text-gray-900 whitespace-no-wrap uppercase">
                        ({{ $Nhora->Lugar }})
                    </p>
                    <button wire:click="borrar({{ $Nhora->id }})" type="button"
                        class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                            class="bi bi-trash-fill"></i></button>
                </td>
                <var {{ $in++ }}></var>
            @break

        @else
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
            </td>
        @endif
    @endfor
@endforeach
@else
<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
@endif
@endfor
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
