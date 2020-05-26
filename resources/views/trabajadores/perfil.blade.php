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
                                    <img src="https://cdn.pixabay.com/photo/2019/10/19/14/16/away-4561518_960_720.jpg" class="img img-fluid">
                                </div>
                                <div class="user-image">
                                    @foreach ($trabajador->argazkiak as $argazkia)
                                        {{-- @if ($argazkia->izena == "perfil")
                                            <img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" />
                                        @endif --}}
                                    @endforeach                                                                    

                                </div>
                            </div>

                            <div class="profile-content">
                            <div class="profile-name">{{$trabajador->izena}} {{$trabajador->abizena}}</div>
                                <div class="profile-designation">{{$trabajador->lana->izena}}</div>
                                
                                <ul class="profile-info-list">
                                    @if(Auth::user()->admin == 1)
                                        <a href="{{url('/citas')}}" class="profile-info-list-item"> Seccion citas </a>
                                    @else
                                        <a href="{{url('/cita/trabajador' . $trabajador->lana_id)}}" class="profile-info-list-item"> Seccion citas </a>
                                    @endif

                                    <a href="{{url('/home')}}" class="profile-info-list-item"> Trabajos realizados </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title font-weight-bold text-uppercase">PERFIL DE {{$trabajador->izena}}</p>
                            <p>
                                <div class="citasIcons">
                                
                                    
                                    <button id="btnEdit"><i class="fa fa-lg fa-edit iconEdit"></i></button>
                                <button data-toggle="modal" data-target="#confirmModal" class="btnDelete"><i class="fa fa-lg fa-trash-o"></i></button>
                            </div>
                            </p>
                            <hr>
                            <p class="card-description">Informacion basica</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Nombre:</span><span class="about-item-detail">{{$trabajador->izena}}</span></li>
                                <li class="about-items"><i class="mdi mdi-mail-ru icon-sm "></i><span class="about-item-name">Usuario:</span><span class="about-item-detail">{{$trabajador->erabiltzailea->username}}</span> </li>
                                <li class="about-items"><i class="mdi mdi-lock-outline icon-sm "></i><span class="about-item-name">Contraseña:</span><span class="about-item-detail">**********</span> </li>
                                <li class="about-items"><i class="mdi mdi-format-align-left icon-sm "></i><span class="about-item-name">Bio:</span><span class="about-item-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto totam, nemo quidem delectus dolores vero porro inventore perferendis minus perspiciatis.</span> </li>

                            </span> <a href="" class="about-item-edit">View</a></li>
                            </ul>
                            <p class="card-description">Informacion del trabajador</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Telefono:</span><span class="about-item-detail">+34 238 456 954</span></li>
                                <li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Direccion:</span><span class="about-item-detail">254 National Highway , Hisar India</span> </li>
                                {{-- <li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href="">{{$usuario->email}}</a></span> </li> --}}
                            </ul>
                            <p class="card-description">Information extra</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span class="about-item-name">Cumpleañs:</span><span class="about-item-detail">Aug 3 , 1998</span></li>
                                {{-- <li class="about-items"><i class="mdi mdi-clipboard-account icon-sm "></i><span class="about-item-name">Especializacion:</span><span class="about-item-detail">{{$usuario->lana->izena}}</span> </li> --}}
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
