@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
    @livewire('usuarios.inicio')
@endsection
@section('js')

<script>
      window.addEventListener('swal', event => {
            Swal.fire({
                title: event.detail.title,
                icon: event.detail.type,

            })
        });

        window.addEventListener('swal2', event => {
            Swal.fire({
                title: event.detail.title,
                icon: event.detail.type,

            })
        });
</script>
@endsection
