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
            <form action="{{route('update' , $zita->zita_id)}}" method="POST">

                <tr>
                    <td> {{ $zita->bezero_izena }} </td>
                    <td> {{ $zita->bezero_email }} </td>
                    <td> {{ $zita->telefonoa }} </td>
                    <td> <input class="inputSettings {{$zita->zita_id}}" type="time" min="10:00" max="20:00" step="600" name="ordua" value="{{$zita->ordua}}" readonly></td>
                    <td> 
                        <input class="inputSettings {{$zita->zita_id}} myDate" type="date" name="eguna" readonly>
                        <input type="hidden" class="dateValue" value="{{ $zita->eguna }}">
                    </td> 
                    
                    <td> {{ $zita->lana->izena }}</td>
                    <td>
                        <div class="citasIcons">
                                @method('PUT')
                                @csrf
                                
                                <button class="{{$zita->zita_id}}" id="btnEdit"><i class="fa fa-lg fa-edit iconEdit"></i></button>
                            </form>
                            <button data-toggle="modal" data-target="#confirmModal" class="btnDelete" data-id="{{$zita->zita_id}}"><i class="fa fa-lg fa-trash-o"></i></button>
                        </div>
                    </td>
            @endforeach
                </tr>
        </table>


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
