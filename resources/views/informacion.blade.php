@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb" class="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
                <li class="breadcrumb-item active">Sobre nosotros</li>
            </ol>
        </div>
    </nav>


    <div class="row no-padding">
        <div class="col-12 mx-auto p-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.6865514897463!2d-2.9053552849856654!3d43.257990685914905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e4fac87437727%3A0x364f27e82def0130!2sCIFP%20Txurdinaga%20LHII!5e0!3m2!1ses!2ses!4v1571830347683!5m2!1ses!2ses"></iframe>
        </div>
    </div>

    <section class="bgded overlay pb-5" style="background-image:url('./img/backgrounds/fondo3.jpg');
    " id="contact">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 mx-auto text-center">
                    <h3 class="text-center heading"> CONTACTANOS </h3>
                    <hr/>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-8">
                    <form action="{{route('enviarFormulario')}}" method="post" class="contact-form">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <input type="text" class="form-control" name="nombre" id="nombre_cliente" pattern="[A-Za-zñÑ ]{3,15}" minlength="3" maxlength="15" required placeholder="nombre">
                            </div>

                            <div class="col-12 col-xl-6">
                                <input type="mobile" class="form-control" id="movil" pattern="\d{9}" minlength="9" maxlength="9" name="movil" placeholder="ej: 654656248" required>
                            </div>

                            <div class="col-12 col-xl-6">
                                <select name="trabajo" class="form-control" >Trabajo:
                                    @foreach ($trabajos as $trabajo)
                                        <option value="{{ $trabajo->lana_id }}"> {{ $trabajo->izena }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-xl-6">
                                <input type="text" class="form-control" id="emailForm" pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$" name="email" placeholder="ejemplo@gmail.com" required >
                            </div>

                            <div class="col-12">
                                <textarea placeholder="message" cols="30" rows="10" id="mensaje" name="mensaje"></textarea>

                                <p class="error" id="mensajeError"></p>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <input class="col-12 col-xl-6" type="reset" value="Borrar">
{{--                                     <button class="col-12 col-xl-6" data-toggle="modal" type="submit" data-target="#sendConfirmModal">Enviar</button>
 --}}
                                    <input class="col-12 col-xl-6" type="submit" value="Enviar" id="enviar" data-toggle="modal" type="submit" data-target="#sendConfirmModal">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                

                <div class="col-md-4">
                    <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <address> Ornilla Doctor Kalea, 2, 48004 Bilbo, Bizkaia </address>
                    </div>

                    <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <a href="tel:+34944125712"> (+34) 944 12 57 12</a>
                    </div>

                    <div class="single-contact">
                        <i class="fa fa-fax"></i></i>
                        <h5>Fax</h5>
                        <p>(+34)  944 731 359</p>
                    </div>

                    <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>idazkaria@fpTXurdinaga.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
