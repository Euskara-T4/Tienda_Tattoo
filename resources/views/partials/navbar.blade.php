{{-- INFORMAACION PRINCIPAL --}}
<div class='wrapper row0'>
    <div id='topbar' class='hoc clear'>
        <ul>
            <li><i class='fa fa-clock-o'></i> Mon. - Fri. 8am - 5pm</li>
            <li><i class='fa fa-phone'></i> 944 12 57 12</li>
            <li><i class='fa fa-envelope-o'></i> idazkaria@fpTXurdinaga.com</li>

            <!-- USER ACTION ICONS -->
            @if(!Auth::check())
                <li><a href='#' title='Login' data-toggle="modal" data-target="#loginModal"><i class='fa fa-lg fa-sign-in'></i></a></li>
            @else
                <li class="nav-item {{ Request::is('perfil') || Request::is('') ?  'active' : ''}}">
                    <a class="nav-link" href="{{url('/perfil')}}">
                        <i class='fa fa-lg fa-home'></i>    
                    </a>
                </li>

                <li class="nav-item {{ Request::is('logout') || Request::is('') ?  'active' : ''}}">
                    <a class="nav-link">
                        <i class='fa fa-lg fa-sign-out'></i>
                    </a>
                </li>     
            @endif  
        </ul>
    </div>
</div>

{{-- LOGIN MODAL --}}
<div id='loginModal' class='modal'>
    <form method="POST" action="{{ route('login') }}" class="modal-content animate" >
        @csrf
        
        <div class='imgcontainer'>
            <img src='../public/img/avatar.png' alt='Avatar' class='avatar'>
        </div>

        <div class='logContainer'>
            <label for='email' class="col-12"><b>Correo:</b></label>
            <input type='text' id="email" placeholder='ejemplo@gmail.com' name='email' class="col-12 form-control @error('email') is-invalid @enderror"
            required autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong> Usuario incorrecto </strong>
                </span>
            @enderror

            <label for='psw' class="col-12 pt-3"><b>Contraseña:</b></label>
            <input id="passwordLogin" type="password" class="col-12 form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password"
            pattern="[A-Za-zÑñ0-9]{1,20}" minlength="5" maxlength="100" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong> Contraseña incorrecta </strong>
                </span>
            @enderror
        </div>

        <div class="form-check row">
            <input class="col-12 form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="col-12 form-check-label" for="remember">
                {{ __('Recordar contraseña') }}
            </label>

            <a class="col-12 mt-2" href="">¿Has olvidado la contraseña?</a>

            <p class="col-12 mt-2" id="mensajeError"></p>
        </div>

        <div class='btnContainer'>
            <button type='reset' class='cancelBtn' id='cancelBtn'>Borrar</button>
            <button type='submit' class='loginBtn' id='loginBtn'>Login</button>
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
            <a class="navbar-brand" href="{{url('/home')}}"> <h1 class="logoTxt loginLink"> INK HEART TATTOO </h1> </a>
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
                        <span aria-hidden="true"></span> CONTACTANOS
                    </a>
                </li>            
            </ul>
        </div>
    </div>
</nav>
