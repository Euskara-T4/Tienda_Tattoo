@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Galeria</li>
        </ol>
    </nav>

    <div class="container">
        <h3 class="text-center heading"> TRABAJOS REALIZADOS POR NUESTROS ARTISTAS </h3>
        <hr/>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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


@endsection
