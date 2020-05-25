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
                <th>Horario</th>
                <th>Fecha</th>
                <th>Trabajo</th>
                <th>Acciones</th>
            </tr>

            @foreach ($zitas as $zita)
                <tr>
                    <td> {{ $zita->bezero_izena }} </td>
                    <td> {{ $zita->bezero_email }} </td>
                    <td> {{ $zita->telefonoa }} </td>
                    <td> {{ $zita->ordua }} </td>
                    <td> {{ $zita->eguna }} </td>
                    <td> {{ $zita->lana->izena }}</td>
                    <td>
                        <div class="citasIcons">
                            <button data-toggle="modal" data-target="#editModal" class="btnEdit" data-id="{{$zita}}"><i class="fa fa-lg fa-edit"></i></button>
                            <button data-toggle="modal" data-target="#confirmModal" class="btnDelete" data-id="{{$zita->zita_id}}"><i class="fa fa-lg fa-trash-o"></i></button>
                        </div>
                    </td>
            @endforeach
                </tr>
        </table>


        {{-- MODAL EDITAR CITA --}}
        <form action="" method="POST" id="editForm">
            @method('PUT')

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Editar cita de {{$zita->bezero_izena}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                        </div>

                        <div class="modal-body ">
                           {{--  <input type="text" name="nombre" value="{{$zitaActualizar->bezero_izena}}">
                        
                            <input type="text" name="email" value="{{$zitaActualizar->bezero_email}}">
                        
                            <input type="text" name="telefono" value="{{$zitaActualizar->telefonoa}}">
                        
                            <input type="text" name="desk" value="{{$zitaActualizar->deskripziona}}">
                        
                            <input type="text" name="trabajo" value="{{$zitaActualizar->lana_id}}"> --}}
                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>                        
                            <button type="submit" id="btnEditConfirm" class="btn" data-dismiss="modal">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- MODAL CONFIRMACION BORRAR --}}
        <form action="" method="POST" id="deleteForm">
            @method('DELETE')
            @csrf
            
            <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Confirmacion de borrar cita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                        </div>

                        <div class="modal-body">
                            <p>Estas seguro de que quieres borrar la cita correspondiente a la id <span class="zitaNumber">?</p>
                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>                        
                            <button type="submit" id="btnDeleteConfirm" class="btn btn-danger" data-dismiss="modal">Si, borrar</button>    
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- <section>
            @yield('edit')
        </section> --}}
    </div>
@endsection
