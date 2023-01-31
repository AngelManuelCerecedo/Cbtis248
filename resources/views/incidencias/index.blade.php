@extends('layouts.app')
@section('title', 'Incidencias')
@section('content')
    @livewire('incidencias.bincidencia',['userlog'=>auth()->user()])
@endsection
@section('js')
    <script>
        window.addEventListener('swal', event => {
            Swal.fire({
                position: 'mid',
                icon: event.detail.type,
                title: event.detail.title,
                showConfirmButton: false,
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
    </script>
@endsection
