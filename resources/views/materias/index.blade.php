@extends('layouts.app')
@section('title', 'Materias')
@section('content')
    @livewire('materias.index')
@endsection
@section('js')
    <script>
        window.addEventListener('swal', event => {
            Swal.fire({
                title: event.detail.title,
                icon: event.detail.type,

            })
        });

        //Eliminado
        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                    title: event.detail.title,
                    text: "¡No podrás revertir esto!",
                    icon: event.detail.type,
                    showCancelButton: true,
                    cancelButtonColor: '#D5C28B',
                    confirmButtonColor: '#78163B',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Eliminar',
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('delete', event.detail.id);
                        Swal.fire(
                            'Eliminado',
                            'El registro se eliminó exitosamente',
                            'success',

                        )

                    } else {
                        window.livewire.emit('', event.detail.id);
                    }
                });
        });

        window.addEventListener('swal:confirm1', event => {
            Swal.fire({
                    title: event.detail.title,
                    text: "¡No podrás revertir esto!",
                    icon: event.detail.type,
                    showCancelButton: true,
                    cancelButtonColor: '#D5C28B',
                    confirmButtonColor: '#78163B',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Desasignar',
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('desasignar1', event.detail.id);
                        Swal.fire(
                            'Eliminado',
                            'El registro se eliminó exitosamente',
                            'success',

                        )

                    } else {
                        window.livewire.emit('', event.detail.id);
                    }
                });
        });



    </script>
@endsection
