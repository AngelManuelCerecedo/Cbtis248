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
                            @foreach ($Phoras as $Phora)
                                @for ($i; $i < 6; $i++)
                                    @if ($Phora->dia_id == $i)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $Phora->materia->Nombre}}</p>
                                        </td>
                                        <var {{$i++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">8:20-9:10</td>
                            @foreach ($Shoras as $Shora)
                                @for ($is; $is < 6; $is++)
                                    @if ($Shora->dia_id == $is)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $Shora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$is++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">9:10-10:00</td>
                            @foreach ($Thoras as $Thora)
                                @for ($it; $it < 6; $it++)
                                    @if ($Thora->dia_id == $it)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $Thora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$it++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">10:00-10:30</td>
                            @foreach ($Qhoras as $Qhora)
                                @for ($iq; $iq < 6; $iq++)
                                    @if ($Qhora->dia_id == $iq)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $Qhora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$iq++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">10:30-11:20</td>
                            @foreach ($Choras as $Chora)
                                @for ($ic; $ic < 6; $ic++)
                                    @if ($Chora->dia_id == $ic)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $Chora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$ic++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">11:20-12:10</td>
                            @foreach ($SEhoras as $SEhora)
                                @for ($ise; $ise < 6; $ise++)
                                    @if ($SEhora->dia_id == $ise)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $SEhora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$ise++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">12:10-13:00</td>
                            @foreach ($SIhoras as $SIhora)
                                @for ($isi; $isi < 6; $isi++)
                                    @if ($SIhora->dia_id == $isi)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $SIhora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$isi++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">13:00-13:50</td>
                            @foreach ($Ohoras as $Ohora)
                                @for ($io; $io < 6; $io++)
                                    @if ($Ohora->dia_id == $io)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $Ohora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$io++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">13:50-14:40</td>
                            @foreach ($Nhoras as $Nhora)
                                @for ($in; $in < 6; $in++)
                                    @if ($Nhora->dia_id == $in)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $Nhora->materia->Nombre }}</p>
                                        </td>
                                        <var {{$in++}}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                                    @endif
                                @endfor
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
