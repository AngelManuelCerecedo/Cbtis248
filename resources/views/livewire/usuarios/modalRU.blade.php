<div>
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
        <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">


                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-2xl font-semibold">
                        Crear nuevo usuario
                    </h3>
                </div>

                <form>
                    <div class="  items-center justify-center pb-3 ml-3 ">
                        <div class="grid    w-auto ">
                            <h2 class="text-lg font-bold"></h2>

                            <div class="grid grid-cols-1 gap-5 md:gap-8 mt-2 mx-7">
                                <div class="grid grid-cols-1">
                                    <label class=" md:text-sm text-xs text-gray-900 font-semibold">Empleado</label>
                                    <select
                                        class="py-2 px-3 rounded-lg border-2 border-gray-300 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent"
                                        wire:model="administrador" id="">
                                        <option value="">
                                            Seleccione a una Persona
                                        </option>
                                        @foreach ($administradores as $administrador)
                                            @if ($administrador->password == null)
                                                <option value="{{ $administrador->id }}">
                                                    {{ $administrador->Nombre }} {{ $administrador->ApPaterno }}
                                                    {{ $administrador->ApMaterno }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('administrador')
                                        <span class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- {{$prueba}} --}}


                            <div class="grid grid-cols-1 gap-5 md:gap-8 mt-2 mx-7">
                                <div class="grid grid-cols-1">
                                    <label for=""
                                        class=" md:text-sm text-xs text-gray-900 font-semibold">Contraseña</label>
                                    <input
                                        class="py-1 px-3 rounded-lg border-2 border-gray-300 mt-1   focus:ring-gray-900 "
                                        type="text" placeholder="Contraseña" id=""
                                        wire:model="contrasena" />
                                    @error('contrasena')
                                        <span class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>




                        </div>
                    </div>

                    <!--footer-->

                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="cerrarModal()" type="button"
                                class="text-white bg-red-500 font-bold  px-6 py-3 text-sm  rounded shadow mr-1 mb-1">Cancelar</button>
                        </span>


                        <button wire:click="guardar()" type="button"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold  text-sm px-6 py-3 rounded shadow mr-1 mb-1 ">Guardar</button>
                        </span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
