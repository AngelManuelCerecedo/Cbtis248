@extends('layouts.app')
@section('title', 'Añadir Materias')
@section('content')
    @livewire('horarios.chprofesor', ['ide' => $id])
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
        window.addEventListener('swal:confirm1', event => {
            Swal.fire({
                    title: event.detail.title,
                    icon: event.detail.type,
                    showCancelButton: true,
                    cancelButtonColor: '#D5C28B',
                    confirmButtonColor: '#78163B',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Confirmar',
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('añadir');

                    } else {
                        window.livewire.emit('');
                    }
                });
        });
    </script>
@endsection
