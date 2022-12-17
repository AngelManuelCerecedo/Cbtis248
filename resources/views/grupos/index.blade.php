@extends('layouts.app')
@section('title', 'Grupos')
@section('content')
    @livewire('grupos.index')
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
