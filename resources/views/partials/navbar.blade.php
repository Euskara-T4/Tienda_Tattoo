{{-- INFORMAACION PRINCIPAL --}}
<div class='wrapper row0'>
    <div id='topbar' class='hoc clear'>
        <!-- ################################################################################################ -->
        <ul>
            <li><i class='fa fa-clock-o'></i> Mon. - Fri. 8am - 5pm</li>
            <li><i class='fa fa-phone'></i> 944 12 57 12</li>
            <li><i class='fa fa-envelope-o'></i> idazkaria@fpTXurdinaga.com</li>

            <!-- ################################################################################################ -->
            <!-- USER ACTION ICONS -->
            @if(Auth::check())
                <li><a href='#' title='Logeatu' id='btnLogin'><i class='fa fa-lg fa-sign-in'></i></a></li>
            @endif

            <?php
<<<<<<< HEAD
                if(isset($_SESSION['usuario'])){
            ?>
                    <li><a href='update.php' title='Perfila'><i class='fa fa-lg fa-home'></i></a></li>
=======
                if(isset($_SESSION['usuario'])){
            ?>
                    <li><a href='update.php' title='Perfila'><i class='fa fa-lg fa-home'></i></a></li>
>>>>>>> fe9f39a283d927955458c39f9f961e80cefb1a46
            <?php
                    echo $_SESSION['usuario'];
            ?>
                    <li><a href='#' title='Irten' id='btnLogout'><i class='fa fa-lg fa-sign-out'></i></a></li>
<<<<<<< HEAD

=======

>>>>>>> fe9f39a283d927955458c39f9f961e80cefb1a46
            <?php
                    if($_SESSION['adminRol'] == 1 || $_SESSION['adminRol'] == 2){
                    ?>
                        <li><a href='ajusteak.php' title='Ajusteak' id='btnSettings'><i class='fa fa-lg fa-cog'></i></a></li>
                        <li><a href='addPost.php' title='Posta gehitu' id='btnPost'><i class='fa fa-lg fa-plus-square'></i></a></li>
<<<<<<< HEAD

                    <?php
                    }

                } else {
=======

                    <?php
                    }

                } else {
>>>>>>> fe9f39a283d927955458c39f9f961e80cefb1a46
            ?>
                <li><a href='#' title='Logeatu' id='btnLogin'><i class='fa fa-lg fa-sign-in'></i></a></li>
            <?php
                }
            ?>
            <!-- -------------------------------------- -->
<<<<<<< HEAD

            <li><a href="{{url('/registro')}}"     title='Sortu'><i class='fa fa-lg fa-user-plus'></i></a></li>
        </ul>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
=======

            <li><a href='registro.php' title='Sortu'><i class='fa fa-lg fa-user-plus'></i></a></li>
        </ul>
    </div>
</div>
<!-- ################################################################################################ -->
>>>>>>> fe9f39a283d927955458c39f9f961e80cefb1a46

<!-- LOGIN MODAL -->
<div id='loginModal' class='modal'>
    <form action="{{ url('/login') }}" method="POST" class="modal-content animate">
        {{ csrf_field() }}
<<<<<<< HEAD

=======

>>>>>>> fe9f39a283d927955458c39f9f961e80cefb1a46
        <div class='imgcontainer'>
            <span class='close' id='close' title='Close Modal'>&times;</span>
            <img src='../public/img/avatar.png' alt='Avatar' class='avatar'>
        </div>

        <div class='logContainer'>
            <label for='erabiltzaile_iz'><b>Nombre usuario:</b></label>
            <input type='text' placeholder='Sartu erabiltzailea' name='erabiltzaile_iz' required>

            <label for='psw'><b>Contraseña:</b></label>
            <input type='password' placeholder='Sartu pasahitza' name='pasahitza' required>
            <!-- <label>
                <input type='checkbox' checked='checked' name='remember'> Remember me
            </label> -->
        </div>

        <div class='btnContainer'>
            <button type="submit" class="loginBtn">Iniciar sesion</button>
            <button type='button' class='cancelBtn' id='cancelBtn'>Cancelar</button>
        </div>
    </form>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div id='logo' class='fl_left flex'>
            <a class="navbar-brand" href="{{url('/home')}}">
                <object data="../public/img/logo.svg" type="image/svg+xml" class="logo">
                    <img src="../public/img/logo.jpg"/>
                </object>
            </a>
            <a class="navbar-brand" href="{{url('/home')}}"> <h1 class="logoTxt loginLink"> INK HEART TATTOO</h1> </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('home') || Request::is('') ?  'active' : ''}}">
                    <a class="nav-link" href="{{url('/home')}}">
                        <span aria-hidden="true"></span> INICIO
                    </a>
                </li>

                <li class="nav-item dropdown {{Request::is('trabajador') ? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ARTISTAS
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- COGER DE LA BD LOS TRABAJADORES --}}
                        @foreach($trabajadores as $trabajador)
                            <a class="dropdown-item" href="{{url('/trabajador'. $trabajador->langile_id)}}"> {{$trabajador->izena }} {{$trabajador->abizena }}</a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item {{ Request::is('galeria') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/galeria')}}">
                        <span aria-hidden="true"></span> GALERIA
                    </a>
                </li>

                <li class="nav-item {{ Request::is('preguntas') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/preguntas')}}">
                        <span aria-hidden="true"></span> PREGUNTAS
                    </a>
                </li>

                <li class="nav-item {{ Request::is('sobreNosotros') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/sobreNosotros')}}">
                        <span aria-hidden="true"></span> SOBRE NOSOTROS
                    </a>
                </li>

                <li class="nav-item {{ Request::is('formularioCita') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/formularioCita')}}">
                        <span aria-hidden="true"></span> PIDE TU CITA</a>
                </li>


                {{-- Esto solo tiene que aparecer cuando esta logeado --}}
                @if(Auth::check())
                    <li class="nav-item {{ Request::is('crearPeticion') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/crearPeticion')}}">
                            <span>&#10010</span> Añadir mujer
                        </a>
                    </li>
                @endif

                {{-- Esto solo tiene que aparecer cuando esta logeado el ADMIN --}}
                @if(Auth::check() && Auth::user()->admin==1)
                    <li class="nav-item {{ Request::is('tablaPeticiones') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/tablaPeticiones')}}"> Gestionar peticiones </a>
                    </li>
                @endif

                <li class="nav-item">
                    {{-- Comprobamos si el usuario esta iniciado --}}
                    @if(Auth::check())
                        <form action="{{ url('/logout') }}" method="POST" class="navForm">
                            {{ csrf_field() }}

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle loginLink" data-toggle="dropdown">
                                        <span class="fa fa-user"></span> 
                                        <strong>{{$usuario->name ?? ''}}</strong>
                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-login">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p class="text-center">
                                                            <span class="fa fa-user icon-size"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <p class="text-left small">{{$usuario->email ?? ''}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="navbar-login navbar-login-session">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-block cerrarBtn"> Cerrar sesión </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                        </form>

                    @else

                        <form action="{{ url('/login') }}" method="GET" class="navForm loginBtn">
                            {{ csrf_field() }}
                            {{-- <button type="submit" class="btn btn-link nav-link fa fa-user loginLink">
                                Iniciar sesión
                            </button>
                            --}}
                        </form>

                    @endif

                </li>
            </ul>
        </div>
    </div>
</nav>
