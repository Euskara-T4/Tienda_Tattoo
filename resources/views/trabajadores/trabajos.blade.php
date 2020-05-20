@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Trabajos realizados</li>
        </ol>
    </nav>

    <h3 class="heading"> TRABAJOS REALIZADOS POR ARTISTA {{$trabajador->izena}} {{$trabajador->abizena}} {{$trabajador->langile_id}}</h3>
    
  



@endsection
