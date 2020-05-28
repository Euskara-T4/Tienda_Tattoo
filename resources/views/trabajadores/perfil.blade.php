@extends('layouts.master')

@section('content')

<nav aria-label="breadcrumb" class="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Perfil</li>
        </ol>
    </div>
</nav>

<section style="background-image:url('./img/backgrounds/fondo1.jpg');" class="overlay bgded pb-5" >

    <div class="main-panel perfil pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="profile-card">
                            <div class="profile-header">
                                <div class="cover-image">
                                    @foreach($fotos as $argazkia)
                                        @if ($argazkia->langile_id != null)
                                            @if ($argazkia->langile_id == $usuario->langile_id && $argazkia->izena == 'perfil')
                                                <img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" />
                                            @endif
                                        @else
                                            <img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" />
                                        @endif
                                    @endforeach
                                </div>

                            </div>

                            <div class="profile-content">
                            <div class="profile-name text-uppercase citasIcons">{{$usuario->langilea->izena}} {{$usuario->langilea->abizena}}
                                <button><i class="fa fa-lg fa-edit" id="editPerfil"></i></button>
                            </div>
                                @if(Auth::user()->admin != 1)
                                    <div class="profile-designation">{{$usuario->langilea->lana->izena}}</div>
                                @endif

                                <ul class="profile-info-list">
                                    @if(Auth::user()->admin == 1)
                                        <a href="{{url('/citas')}}" class="profile-info-list-item"> Seccion citas </a>
                                    @else
                                        <a href="{{url('/cita/usuario' . $usuario->langilea->lana_id)}}" class="profile-info-list-item"> Seccion citas </a>
                                        <a href="{{url('/trabajos' . $usuario->langilea->lana_id)}}" class="profile-info-list-item"> Trabajos realizados </a>

                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title font-weight-bold text-uppercase">PERFIL DE {{$usuario->langilea->izena}} {{$usuario->langilea->abizena}} </p>
                            <hr>

                            <p class="card-description">Informacion basica</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Nombre:</span><span class="about-item-detail">{{$usuario->langilea->izena}}</span></li>
                                @if(Auth::user()->admin != 1)
                                    <li class="about-items"><i class="mdi mdi-mail-ru icon-sm "></i><span class="about-item-name">Usuario:</span><span class="about-item-detail">{{$usuario->username}}</span> </li>
                                @endif
                                <li class="about-items"><i class="mdi mdi-lock-outline icon-sm "></i><span class="about-item-name">Contraseña:</span><span class="about-item-detail">**********</span> </li>
                                <li class="about-items"><i class="mdi mdi-format-align-left icon-sm "></i><span class="about-item-name">Bio:</span><span class="about-item-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto totam, nemo quidem delectus dolores vero porro inventore perferendis minus perspiciatis.</span> </li>
                            </ul>
                            <p class="card-description">Informacion del usuario</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Telefono:</span><span class="about-item-detail">+34 238 456 954</span></li>
                                <li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Direccion:</span><span class="about-item-detail">254 National Highway , Hisar India</span> </li>
                                @if(Auth::user()->admin != 1)
                                    <li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href="">{{$usuario->email}}</a></span> </li>
                                @endif
                            </ul>
                            <p class="card-description">Information extra</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span class="about-item-name">Cumpleañs:</span><span class="about-item-detail">Aug 3 , 1998</span></li>
                                @if(Auth::user()->admin != 1)
                                    <li class="about-items"><i class="mdi mdi-clipboard-account icon-sm "></i><span class="about-item-name">Especializacion:</span><span class="about-item-detail">{{$usuario->langilea->lana->izena}}</span> </li>
                                @endif
                                <li class="about-items"><i class="mdi mdi-human-male-female icon-sm "></i><span class="about-item-name">Relationship Status:</span><span class="about-item-detail">Single</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection
