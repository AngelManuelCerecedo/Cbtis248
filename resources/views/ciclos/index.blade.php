@extends('layouts.app')
@section('title', 'Ciclos')
@section('content')
    @livewire('ciclos.index')
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
        //Actualizar
        window.addEventListener('swal:confirm2', event => {
            Swal.fire({
                    title: event.detail.title,
                    text: "¡No podrás revertir esto!",
                    icon: event.detail.type,
                    showCancelButton: true,
                    cancelButtonColor: '#D5C28B',
                    confirmButtonColor: '#78163B',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Actualizar',
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('actualizar', event.detail.id);
                        Swal.fire(
                            'Actualizado',
                            'El registro se actualizo exitosamente',
                            'success',

                        )

                    } else {
                        window.livewire.emit('', event.detail.id);
                    }
                });
        });
        window.addEventListener('swal:confirm3', event => {
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
                        window.livewire.emit('delete1', event.detail.id);
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