@extends('layouts.app')
@section('title','Horarios')
@section('content')
@livewire('horarios.vhalumno',['ide' => $id])
@endsection
