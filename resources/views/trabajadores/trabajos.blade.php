@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Trabajos realizados</li>
        </ol>
    </nav>

    
    <h1 class="heading"> TRABAJOS REALIZADOS POR ARTISTA:</h1>
    <h2 style="text-align: center">{{$trabajador->izena}} {{$trabajador->abizena}}</h2>


    @foreach ($foto as $argazkia)
                    @if ($argazkia->izena != "perfil")
                        @if ($argazkia->langile_id == $trabajador->langile_id)
                        
                            <div class='item selfie col-lg-3 col-md-4 col-6 col-sm'>

                                    <ul> 
		
                                        <li><p><strong>{{$argazkia->izena}}</strong></p><p><img class="img-fluid" alt="{{$argazkia->izena}}" src="{{$argazkia->url}}" /></p></li>
                                
                                    </ul>
                    
                            </div>
                        @endif
                    @endif
                @endforeach
  



@endsection
