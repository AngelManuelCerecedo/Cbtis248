@extends('layouts.app')
@section('title', 'Registrar Alumno')
@section('content')
    @livewire('alumnos.ralumnos')
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
    </script>
@endsection
