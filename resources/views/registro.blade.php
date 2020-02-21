@extends('layouts.master')

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
      <li class="breadcrumb-item active">Registro</li>
    </ol>
  </nav>

  <h3> REGISTRATE  </h3>

  <div id="accordion">
    <form action="{{route('registrado')}}" method="post">
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Apellido">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="ejemplo@tatto.com">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="*******">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>

        @if (session('registrado'))
        <div class="alert alert-danger mt-3">
            {{session('registrado')}}
        </div>
    @endif
      </form>
  </div>

@endsection
