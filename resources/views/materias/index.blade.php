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
    </script>
@endsection
