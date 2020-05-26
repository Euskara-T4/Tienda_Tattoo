@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Citas pendientes</li>
        </ol>
    </nav>

    <h3> TABLA DE CITAS </h3>

    <table class="table" >

        <tr>
            <th>nombre</th>
            <th>telefono</th>
            <th>email</th>
            <th>mensaje</th>
            <th>trabajo</th>
            <th>acciones</th>

        </tr>
        @foreach ($zitaActualizar as $zita)
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
    