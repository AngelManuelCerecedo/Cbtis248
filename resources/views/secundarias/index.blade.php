@extends('layouts.app')
@section('title', 'Secundarias')
@section('content')
    @livewire('secundarias.index')
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
