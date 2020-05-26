<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="title"> INK HEART TATTOO  </h3>
            </div>

            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="list-unstyled">
                            <li class="list-item {{ Request::is('home') ? 'active' : ''}}">
                                <a class="nav-link" href="{{url('/home')}}">
                                    <span aria-hidden="true"></span> INICIO
                                </a>
                            </li>
                                
                            <li class="list-item {{ Request::is('trabajador') ? 'active' : ''}}">
                                <a class="nav-link" href="{{url('/home')}}">
                                    <span aria-hidden="true"></span> ARTISTAS
                                </a>
                            </li>

                            <li class="list-item {{ Request::is('home') ? 'active' : ''}}">
                                <a class="nav-link" href="{{url('/home')}}">
                                    <span aria-hidden="true"></span> GALERIA
                                </a>
                            </li>

                            <li class="list-item {{ Request::is('home') ? 'active' : ''}}">
                                <a class="nav-link" href="{{url('/home')}}">
                                    <span aria-hidden="true"></span> PREGUNTAS
                                </a>
                            </li>

                            <li class="list-item {{ Request::is('sobreNosotros') ? 'active' : ''}}">
                                <a class="nav-link" href="{{url('/sobreNosotros')}}">
                                    <span aria-hidden="true"></span> CONTACTANOS
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="row adress">
                            <div class="col-12">
                                <address>
                                    <i class="fa fa fa-envelope"></i> idazkaria@fpTXurdinaga.com
                                    <br />
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+34944125712"> (+34) 944 12 57 12</a>
                                    <br />
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row copyright ">
            <div class="col-md-12">
                <h6> COPYRIGHT @ 2020 INK HEART </h6>
            </div>
        </div>
    </div>

</footer>
