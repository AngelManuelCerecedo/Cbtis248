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
                            @if ($materia->grupo->Clave_Grupo != 'Sin Grupo')
                                @if ($materia->profesor_id == $Profesor->id && $materia->Horas_Sem != $materia->Horas_Reg)
                                    <option value="{{ $materia->id }}">{{ $materia->Nombre }} GRUPO:
                                        {{ $materia->grupo->Clave_Grupo }}</option>
                                @endif
                            @else
                                @if ($materia->profesor_id == $Profesor->id && $materia->Horas_Sem != $materia->Horas_Reg)
                                    <option value="{{ $materia->id }}">{{ $materia->Nombre }}</option>
                                @endif
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
                        @if ($this->M != '' && $this->D != '')
                            @if ($this->v1 == null)
                                <option value="1">7:30-8:20</option>
                            @endif
                            @if ($this->v2 == null)
                                <option value="2">8:20-9:10</option>
                            @endif
                            @if ($this->v3 == null)
                                <option value="3">9:10-10:00</option>
                            @endif
                            @if ($this->v5 == null)
                                <option value="5">10:30-11:20</option>
                            @endif
                            @if ($this->v6 == null)
                                <option value="6">11:20-12:10</option>
                            @endif
                            @if ($this->v7 == null)
                                <option value="7">12:10-13:00</option>
                            @endif
                            @if ($this->v8 == null)
                                <option value="8">13:00-13:50</option>
                            @endif
                            @if ($this->v9 == null)
                                <option value="9">13:50-14:40</option>
                            @endif
                            @if ($this->v10 == null)
                                <option value="10">14:40-15:30</option>
                            @endif
                        @endif
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
                        <option value="Centro de Computo 1">Centro de Computo 1</option>
                        <option value="Centro de Computo 2">Centro de Computo 2</option>
                        <option value="Laboratorio">Laboratorio Multiple</option>
                        <option value="Biblioteca">Biblioteca</option>
                        <option value="Area Verde">Area Verde</option>
                        <option value="Oficinas del Plantel">Oficinas del Plantel</option>
                    </select>
                    @error('L')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class=" flex flex-col md:ml-6">
                    <button
                        class="mt-8 font-sans leading-none text-white py-3 px-28 bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none"
                        wire:click="verificar()">
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
                                                @if ($Phora->materia_id == null && $Phora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $i++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Phora->materia->Nombre }}
                                                            ({{ $Phora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Phora->Lugar }})
                                                            <button wire:click="borrar({{ $Phora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $i++ }}> </var> @break
                                                @endif
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
                                                @if ($Shora->materia_id == null && $Shora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $is++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Shora->materia->Nombre }}
                                                            ({{ $Shora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Shora->Lugar }})
                                                            <button wire:click="borrar({{ $Shora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $is++ }}> </var> @break
                                                @endif
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
                                                @if ($Thora->materia_id == null && $Thora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $it++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Thora->materia->Nombre }}
                                                            ({{ $Thora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Thora->Lugar }})
                                                            <button wire:click="borrar({{ $Thora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $it++ }}> </var> @break
                                                @endif
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
                                                @if ($Qhora->materia_id == null && $Qhora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $iq++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Qhora->materia->Nombre }}
                                                            ({{ $Qhora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Qhora->Lugar }})
                                                            <button wire:click="borrar({{ $Qhora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $iq++ }}> </var> @break
                                                @endif
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
                                                @if ($Chora->materia_id == null && $Chora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $ic++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Chora->materia->Nombre }}
                                                            ({{ $Chora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Chora->Lugar }})
                                                            <button wire:click="borrar({{ $Chora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $ic++ }}> </var> @break
                                                @endif
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
                                                @if ($SEhora->materia_id == null && $SEhora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $ise++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $SEhora->materia->Nombre }}
                                                            ({{ $SEhora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $SEhora->Lugar }})
                                                            <button wire:click="borrar({{ $SEhora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $ise++ }}> </var> @break
                                                @endif
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
                                                @if ($SIhora->materia_id == null && $SIhora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $isi++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $SIhora->materia->Nombre }}
                                                            ({{ $SIhora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $SIhora->Lugar }})
                                                            <button wire:click="borrar({{ $SIhora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $isi++ }}> </var> @break
                                                @endif
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
                                                @if ($Ohora->materia_id == null && $Ohora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $io++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Ohora->materia->Nombre }}
                                                            ({{ $Ohora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Ohora->Lugar }})
                                                            <button wire:click="borrar({{ $Ohora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $io++ }}> </var> @break
                                                @endif
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
                                                @if ($Nhora->materia_id == null && $Nhora->actividad_id == null)
                                                    <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                    </td>
                                                    <var {{ $in++ }}> </var> @break
                                                @else
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Nhora->materia->Nombre }}
                                                            ({{ $Nhora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Nhora->Lugar }})
                                                            <button wire:click="borrar({{ $Nhora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $in++ }}> </var> @break
                                                @endif
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
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">14:40-15:30</td>
                            @for ($p = 0; $p < 5; $p++)
                                @if (!empty($Dhoras) && $Dhoras != '[]')
                                    @foreach ($Dhoras as $Dhora)
                                        @for ($d; $d < 6; $d++)
                                            @if ($Dhora->dia_id == $d)
                                                @if ($Dhora->materia_id == null && $Dhora->actividad_id == null)
                                                     <td class="px-5 py-5 border-[#78163c] bg-white text-sm border">
                                                     </td>
                                                    <var {{ $d++ }}> </var> @break
                                                 @else
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $Dhora->materia->Nombre }}
                                                         ({{ $Dhora->grupo->Clave_Grupo }})
                                                        </p>
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            ({{ $Dhora->Lugar }})
                                                            <button wire:click="borrar({{ $Dhora->id }})"
                                                                type="button"
                                                                class="text-white bg-[#78163B]  rounded-lg text-sm   py-1 px-1 m-1"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </p>
                                                    </td>
                                                    <var {{ $d++ }}> </var> @break
                                                @endif
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
