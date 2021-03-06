@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb" class="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
                <li class="breadcrumb-item active">Galeria</li>
            </ol>
        </div>
    </nav>

    <section style="background-image:url('./img/backgrounds/fondo1.jpg');" class="overlay bgded pb-5" >
        <div class="container">
            <h3 class="text-center heading"> TRABAJOS REALIZADOS POR NUESTROS ARTISTAS </h3>
            <hr/>
            <p class="text-center">Aqui dispones de una amplia galeria de fotografias realizadas por nuestros grandes artistas.</p>
           
           {{--  @foreach($argazkiak->chunk(3) as $chunk)
                <div class="portfolio-item d-flex flex-row">
                    @foreach($chunk as $argazkia)
                        @if ($argazkia->izena != "perfil")
                            <div class=" d-flex flex-column-4 item">
                                <a href="{{$argazkia->url}}" class="fancylight popup-btn" data-fancybox-group="light">
                                    <img class="img-responsive img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" width="150"/>
                                </a>  
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach --}}
            <div class="galleryFlex">
                <ul>
                    @foreach ($argazkiak as $argazkia)
                        @if ($argazkia->izena != "perfil")
                            <li>
                                <a href="{{$argazkia->url}}" class="fancylight popup-btn" data-fancybox-group="light">
                                    <img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" />
                                </a>  
                            </li>                        
                        @endif
                    @endforeach               
                </ul>
            </div>

           {{--  <div class="portfolio-item galleryFlex">
                @foreach ($argazkiak as $argazkia)
                    @if ($argazkia->izena != "perfil")
                        <div class='item'>
                            <a href="{{$argazkia->url}}" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" />
                            </a>
                        </div>
                    @endif
                @endforeach
            </div> --}}
        </div>
    </section>

@endsection
