@extends('layouts.master')

@section('content')


<form action="{{route('update' , $zitaActualizar->zita_id)}}" method="POST">
    @method('PUT')
{{$zitaActualizar->zita_id}}
    <div>
        <input type="text" name="nombre" value="{{$zitaActualizar->bezero_izena}}">
    </div>
    
    <div>
        <input type="text" name="email" value="{{$zitaActualizar->bezero_email}}">
    </div>

    <div>
        <input type="text" name="telefono" value="{{$zitaActualizar->telefonoa}}">
    </div>

       
    <div>
        <input type="text" name="desk" value="{{$zitaActualizar->deskripziona}}">
    </div>

       
    <div>
        <input type="text" name="trabajo" value="{{$zitaActualizar->lana_id}}">
    </div>
   
    <button type="submit">actualizar</button>
   








</form>


@endsection