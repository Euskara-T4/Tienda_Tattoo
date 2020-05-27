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
                    <a class="nav-link" href="{{url('/perfil'.Auth::user()->erabiltzailea_id)}}">
                    {{Auth::user()->username }}   <i class='fa fa-lg fa-home'></i>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('logout') || Request::is('') ?  'active' : ''}}">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class='fa fa-lg fa-sign-out'></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
   
                </li>
            @endif
        </ul>
    </div>
</div>

{{-- LOGIN MODAL --}}
<form method="POST" action="{{ route('login') }}">
    @csrf
    
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p>LOGIN MODAL</p>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Correo:</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña:</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="modal-footer form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                       
                        <button id="login" type="reset" class="btn btn-primary">
                            Borrar
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Login
                         </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class='fl_left flex'>
            <a class="navbar-brand" href="{{url('/home')}}">
                <object data="../img/logo.svg" type="image/svg+xml" class="logoImg">
                    <img src="./img/logo.png"/>
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

                <li class="nav-item dropdown {{Request::is('perfil') ? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ARTISTAS
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- COGER DE LA BD LOS TRABAJADORES --}}
                        @foreach($trabajadores as $trabajador)
                            <a class="dropdown-item" href="{{url('/trabajos'. $trabajador->langile_id)}}"> {{$trabajador->izena }} {{$trabajador->abizena }}</a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item {{ Request::is('galeria') ? 'active' : ''}}"></li>
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
