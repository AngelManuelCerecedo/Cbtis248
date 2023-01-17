@extends('layouts.app')
@section('title','Horarios')
@section('content')
@livewire('horarios.vhprofesor',['ide' => $id])
@endsection
