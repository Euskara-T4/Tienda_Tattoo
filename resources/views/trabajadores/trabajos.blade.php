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


        <div id="carouselExampleIndicators" class="carousel slide pt-5 bt-5" data-ride="carousel">            
            <div class="carousel-inner">
                @foreach($fotos as $id => $argazkia)                
                    @if ($argazkia->izena != 'perfil')
                        <div class="carousel-item {{$id == 0 ? 'active' : '' }}">
                            <img class="mx-auto d-block w-20" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" />
                            <p class="text-uppercase text-center"><strong>{{$argazkia->izena}}</strong></p>
                        </div>
                    @endif
                @endforeach
            </div>


            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>


        
        </div>
    </section>  

@endsection
