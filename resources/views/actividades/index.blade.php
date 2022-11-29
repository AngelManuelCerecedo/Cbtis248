@extends('layouts.app')
@section('title', 'Actividades Complementarias')
@section('content')
    @livewire('actividades.index')
@endsection
@section ('js')
<script>
    window.addEventListener('swal', event => {
        Swal.fire({
            title: event.detail.title,
            icon: event.detail.type,

        })
    });
</script>
@endsection