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
                    Selecciona un Rol para el usuario
                </h3>
            </div>



            <div class="  items-center justify-center pb-3 ml-3 ">
                <div class="grid    w-auto ">
                    <h2 class="text-lg font-bold"></h2>



                    {!! Form::model($user, ['route' => ['Usuarios.update', $user], 'method' => 'put']) !!}
                    @foreach ($roles as $rol)
                        <div>
                            <label>
                                {!! Form::checkbox('roles', $rol->id, null, ['class' => 'mr-1']) !!}
                                {{ $rol->name }}
                            </label>
                        </div>
                    @endforeach

                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="cerrarModal3()" type="button"
                                class="text-white bg-red-500 font-bold  px-6 py-3 text-sm  rounded shadow mr-1 mt-1">Cancelar</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

                            {!! Form::submit('Asignar Rol', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold  text-sm px-6 py-3 rounded shadow mt-2 mr-1 mb-1']) !!}
                        </span>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>

        </div>

        <!--footer-->


    </div>
</div>
