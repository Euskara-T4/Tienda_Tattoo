@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
                <li class="breadcrumb-item active">Trabajos realizados</li>
            </ol>
        </div>
    </nav>

    <h3 class="heading"> TRABAJOS REALIZADOS POR ARTISTA {{$trabajador->izena}} {{$trabajador->abizena}} {{$trabajador->langile_id}}</h3>
    
  



@endsection
