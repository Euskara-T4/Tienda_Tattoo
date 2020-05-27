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

    <section style="background-image:url('./img/backgrounds/fondo1.jpg');" class="overlay bgded pb-5" >
        <div class="container">

        <h1 class="heading"> TRABAJOS REALIZADOS POR {{$trabajador->izena}} {{$trabajador->abizena}}</h1>
        <hr/>

        @foreach ($foto as $argazkia)
            @if ($argazkia->izena != "perfil")
                @if ($argazkia->langile_id == $trabajador->langile_id)                
                    <div class='item selfie col-12'>
                        <ul> 
                            <li><p><strong>{{$argazkia->izena}}</strong></p><p><img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" /></p></li>
                        </ul>        
                    </div>
                @endif
            @endif
        @endforeach
        </div>
    </section>  

@endsection
