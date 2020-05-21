@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Sobre nosotros</li>
        </ol>
    </nav>

    <div class="row no-padding">
        <div class="col-12 mx-auto p-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.6865514897463!2d-2.9053552849856654!3d43.257990685914905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e4fac87437727%3A0x364f27e82def0130!2sCIFP%20Txurdinaga%20LHII!5e0!3m2!1ses!2ses!4v1571830347683!5m2!1ses!2ses"></iframe>
        </div>
    </div>

    <section  class="bgded overlay" style="background-image:url('../public/img/backgrounds/fondo3.jpg');" id="contact">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 mx-auto text-center">
                    <div class="section-title">
                        <h4>Contáctanos</h4>
                    </div>
                </div>
            </div>        
    
            <div class="row text-center">
                <div class="col-md-8">
                    <form action="{{route('enviarFormulario')}}" method="post" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <input type="text" class="form-control" id="nombre" pattern="[A-Z a-z]{3,15}" minlength="3" maxlength="15" name="bezeroa" placeholder="nombre" required>
                            </div>  

                            <div class="col-12 col-xl-6">
                                <input type="text" class="form-control" id="movil" pattern="[0-9]{9}" minlength="9" maxlength="9" name="mugikorra" placeholder="móvil" required>
                            </div>

                            <div class="col-12 col-xl-6">
                                <select name="select" class="form-control">Trabajo: 
                                    @foreach ($trabajos as $trabajo)
                                        <option value="{{ $trabajo->id }}"> {{ $trabajo->izena }} </option>
                                    @endforeach
                                </select>
                            </div>                         

                            <div class="col-12 col-xl-6">
                                <input type="text" class="form-control" id="email" pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$" name="email" placeholder="email" required >
                            </div>  

                            

                            <div class="col-12 col-xl-12">
                                <textarea placeholder="message" cols="30" rows="10" id="mensaje"></textarea>
                                <p id="mensajeError"></p>
                                <input type="submit" value="enviar" id="enviar">
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