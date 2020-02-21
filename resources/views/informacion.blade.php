@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Sobre nosotros</li>
        </ol>
    </nav>

    <div class='bgded overlay' style="background-image:url('../public/img/backgrounds/fondo03.jpg');">
        <div id="footer" class="hoc clear aboutUs">
            <!-- ################################################################################################ -->
            <div class="one_third first txtAboutUs">
                <h6 class="heading">Donde encontrarnos</h6>
                <ul class="nospace btmspace-30 linklist contact">
                <li><i class="fa fa-map-marker"></i>
                    <address> Ornilla Doctor Kalea, 2, 48004 Bilbo, Bizkaia </address>
                </li>
                <li><i class="fa fa-phone"></i> 944 12 57 12</li>
                <li><i class="fa fa-fax"></i> 944731359</li>
                <li><i class="fa fa-envelope-o"></i> idazkaria@fpTXurdinaga.com</li>
                </ul>
            </div>
            <!-- MAPA DEL INSTITUTO -->
            <!------------------------>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.6865514897463!2d-2.9053552849856654!3d43.257990685914905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e4fac87437727%3A0x364f27e82def0130!2sCIFP%20Txurdinaga%20LHII!5e0!3m2!1ses!2ses!4v1571830347683!5m2!1ses!2ses"></iframe>
            <!-- ################################################################################################ -->

        </div>
    </div>

@endsection