@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Galeria</li>
        </ol>
    </nav>

    <section style="background-image:url('./img/backgrounds/fondo1.jpg');" class="overlay bgded pb-5" >
        <div class="container">
            <h3 class="text-center heading"> TRABAJOS REALIZADOS POR NUESTROS ARTISTAS </h3>
            <hr/>
            <p>"Aqui dispones de una amplia galeria de fotografias realizadas por nuestros grandes artistas profesionales.</p>

            <div class="portfolio-item row">
                @foreach ($argazkiak as $argazkia)
                    @if ($argazkia->izena != "perfil")
                        <div class='item selfie col-lg-3 col-md-4 col-6 col-sm'>
                            <a href="{{$argazkia->url}}" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" />
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

@endsection
