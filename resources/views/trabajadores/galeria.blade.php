@extends('layouts.master')

@section('content')

    <h3> NUESTRA GALERIA </h3>
    @foreach ($argazkiak as $item)
    <tr>
        <td><img src="{{$item->url}}" alt=""></td>
    </tr>
    @endforeach


@endsection
