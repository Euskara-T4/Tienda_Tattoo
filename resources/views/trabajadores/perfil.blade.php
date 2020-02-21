@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Perfil</li>
        </ol>
    </nav>

    <h3> PERFIL DE ARTISTA </h3>

    <h4> EDITAR PERFIL </h4>
    <h4> SECCION CITAS </h4>
    <h4> EDITAR TRABAJOS REALIZADOS </h4>
@endsection