@extends('layouts.master')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Perfil</li>
    </ol>
</nav>

<div class="container">

    <h3> PERFIL DE ARTISTA </h3>

    <ul>
        <li><a href="{{url('/editar')}}"> VER PERFIL </a></li>
        <li><a href="{{url('/citas')}}"> SECCION CITAS </a></li>
        <li><a href="{{url('/home')}}"> TRABAJOS REALIZADOS </a></li>
    </ul>
</div>




@endsection