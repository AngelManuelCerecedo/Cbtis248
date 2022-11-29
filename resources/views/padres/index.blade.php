@extends('layouts.app')
@section('title', 'Padres')
@section('content')
    @livewire('padres.index')
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
