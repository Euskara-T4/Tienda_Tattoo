@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Perfil</li>
        </ol>
    </nav>

    <h3> PERFIL DE ARTISTA </h3>

    <h4> EDITAR PERFIL </h4>
    <h4> SECCION CITAS </h4>
    <h4> EDITAR TRABAJOS REALIZADOS </h4>
    


    <table class="table" >

        <tr>
            <th>nombre</th>
            <th>telefono</th>
            <th>email</th>
            <th>mensaje</th>
            <th>trabajo</th>
            <th>acciones</th>

        </tr>
        @foreach ($zitas as $zita)
        <tr>
            
          
               
           
        <td><input type="text" name="nombre" value="{{$zita->bezero_izena}}"readonly></td>
        <td><input type="text" name="nombre" value="{{$zita->telefonoa}}"readonly></td>
        <td><input type="text" name="nombre" value="{{$zita->bezero_email}}"readonly></td>
        <td><input type="text" name="nombre" value="{{$zita->deskripzioa}}"readonly></td>
        <td><input type="text" name="nombre" value="{{$zita->lana_id}}"readonly></td>
        <td><a href="{{route('editar', $zita->zita_id)}}" class="btn btn-warning">editar</a></td>

        <form action="{{route('eliminar', $zita->zita_id)}}" method="POST">
            @method('DELETE')
            @csrf


            <td><button class="btn btn-warning">borrar</button></td>

        </form>

           
            @endforeach
        </tr>






    </table>



@endsection