@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Citas pendientes</li>
        </ol>
    </nav>

    <div class="container">
        <h3> TABLA DE CITAS </h3>

        <table class="table">

            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>Trabajo</th>
                <th>Acciones</th>
        
            </tr>
        
            @foreach ($zitas as $zita)
                <tr>
                    <td><input type="text" name="bezero_izena" value="{{$zita->bezero_izena}}" readonly></td>
                    <td><input type="text" name="bezero_email" value="{{$zita->bezero_email}}" readonly></td>
                    <td><input type="text" name="nombre" value="{{$zita->telefonoa}}" readonly></td>
                    <td><input type="text" name="deskripzioa" value="{{$zita->deskripzioa}}" readonly></td>
                    <td><input type="text" name="nombre" value="{{$zita->lana}}" readonly></td>
                    
                    <td><a href="{{route('editar', $zita->zita_id)}}" class="btn btn-warning">editar</a></td>
        
                    <form action="{{route('eliminar', $zita->zita_id)}}" method="POST">
                        @method('DELETE')
                        @csrf

                        <td><button class="btn btn-warning">borrar</button></td>
        
                    </form>
        
            @endforeach
                </tr>    
        </table>

         {{-- MODAL CONFIRMACION BORRAR

            <div class="modal small hide fade confirmModal" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="confirmModalLabel">Delete Confirmation</h3>
                </div>

                <div class="modal-body">
                    <p class="error-text">Estas seguro de que quieres borrar esta cita?</p>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-danger" data-dismiss="modal">Borrar</button>
                </div>
            </div> --}}
    
        {{-- INCLUIMOS UNA SECTION DE LA TABLA PARA EDITAR --}}
    
        <section>
            @yield('edit')
        </section>
    </div>
@endsection