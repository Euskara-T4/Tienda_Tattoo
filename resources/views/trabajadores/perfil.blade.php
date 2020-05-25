@extends('layouts.master')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Perfil</li>
    </ol>
</nav>

<!-- partial -->
<div class="main-panel perfil">
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
                                <img src="https://scontent.fslv1-1.fna.fbcdn.net/v/t1.0-1/p240x240/71764978_543119796448430_5969446522109034496_n.jpg?_nc_cat=105&_nc_oc=AQnoaTQx8fxeyzbIbtQyvZXghFdEQl-ds6NQr_13xAXuGmWnigS1zJHTuH8sKv5e9-TSN3KRAuptCtwM-LlwxidP&_nc_ht=scontent.fslv1-1.fna&oh=52752a53e6b91980d3f9bf227064a95d&oe=5E5A25B9" class="img ">
                            </div>
                        </div>

                        <div class="profile-content">
                            <div class="profile-name">Santosh Ghimire</div>
                            <div class="profile-designation">Webdeveloper</div>
                            <p class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            <ul class="profile-info-list">
                                <a href="" class="profile-info-list-item"><a href="{{url('/citas')}}"> Seccion citas </a>
                                <a href="" class="profile-info-list-item"><a href="{{url('/home')}}"> Trabajos realizados </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <p class="card-title font-weight-bold">PERFIL DE {{$user->izena}}</p> --}}
                        <hr>
                        <p class="card-description">User Information</p>
                        <ul class="about">
                            <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Nombre:</span><span class="about-item-detail">Santosh Ghimire</span><a href="" class="about-item-edit">Edit</a></li>
                            <li class="about-items"><i class="mdi mdi-mail-ru icon-sm "></i><span class="about-item-name">Usuario:</span><span class="about-item-detail">santoshghimire</span> <a href="" class="about-item-edit">Edit</a></li>
                            <li class="about-items"><i class="mdi mdi-lock-outline icon-sm "></i><span class="about-item-name">Contraseña:</span><span class="about-item-detail">**********</span> <a href="" class="about-item-edit">Edit</a></li>
                            <li class="about-items"><i class="mdi mdi-format-align-left icon-sm "></i><span class="about-item-name">Bio:</span><span class="about-item-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto totam, nemo quidem delectus dolores vero porro inventore perferendis minus perspiciatis.</span> <a href="" class="about-item-edit">Edit</a></li>

                        </span> <a href="" class="about-item-edit">View</a></li>
                        </ul>
                        <p class="card-description">Informacion del trabajador</p>
                        <ul class="about">
                            <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Telefono:</span><span class="about-item-detail">+34 238 456 954</span><a href="" class="about-item-edit">Edit</a></li>
                            <li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Direccion:</span><span class="about-item-detail">254 National Highway , Hisar India</span> <a href="" class="about-item-edit">Edit</a></li>
                            {{-- <li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href="">{{$usuario->email}}</a></span> <a href="" class="about-item-edit">Edit</a></li> --}}
                        </ul>
                        <p class="card-description">Information extra</p>
                        <ul class="about">
                            <li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span class="about-item-name">Cumpleañs:</span><span class="about-item-detail">Aug 3 , 1998</span><a href="" class="about-item-edit">Edit</a></li>
                            {{-- <li class="about-items"><i class="mdi mdi-clipboard-account icon-sm "></i><span class="about-item-name">Especializacion:</span><span class="about-item-detail">{{$usuario->lana->izena}}</span> <a href="" class="about-item-edit">Edit</a></li> --}}
                            <li class="about-items"><i class="mdi mdi-human-male-female icon-sm "></i><span class="about-item-name">Relationship Status:</span><span class="about-item-detail">Single</span> <a href="" class="about-item-edit">Edit</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>




        </div>




@endsection
