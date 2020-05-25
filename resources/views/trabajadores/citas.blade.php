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
                    <td> {{ $zita->bezero_izena }} </td>
                    <td> {{ $zita->bezero_email }} </td>
                    <td> {{ $zita->telefonoa }} </td>
                    <td> {{ $zita->deskripzioa }} </td>
                    <td> {{ $zita->lana->izena }}</td>
                    <td>
                        <!-- BOTONES DE LAS OPCIONES CORRESPONDIENTES -->
                        <div class="commentsIcon">
                            {{-- <a href="{{route('editar', $zita->zita_id)}}"><i class="fa fa-lg fa-edit"></i> </a> --}}
                            <button data-toggle="modal" data-target="#editModal"><i class="fa fa-lg fa-edit"></i></button>

                            <button data-toggle="modal" data-target="#confirmModal"><i class="fa fa-lg fa-trash-o"></i></button>
                        </div>
                    </td>
            @endforeach
                </tr>
        </table>

        {{-- MODAL EDITAR CITA --}}
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Confirmacion de borrar cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    </div>

                    <div class="modal-body">
                        <p>Estas seguro de que quieres borrar esta cita?</p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        <form action="{{route('eliminar', $zita->zita_id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" data-dismiss="modal">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- MODAL CONFIRMACION BORRAR --}}
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Confirmacion de borrar cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    </div>

                    <div class="modal-body">
                        <p>Estas seguro de que quieres borrar esta cita?</p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        <form action="{{route('eliminar', $zita->zita_id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" data-dismiss="modal">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- <section>
            @yield('edit')
        </section> --}}
    </div>
@endsection
