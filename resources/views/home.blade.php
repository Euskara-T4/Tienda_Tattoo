@extends('layouts.master')

@section('content')

  {{-- PAGINA INICIAL --}}
  <div class='bgded overlay' style="background-image:url('../public/img/backgrounds/fondoIndex.jpg');">

    <div id="pageintro" class="hoc clear">
      <article>
        <h3 class="heading"> Estudio profesional de tatuajes Ink Heart Tattoo en Bilbao </h3>
        <p> Ongi etorri gure tatuajeen blogera</p>
      </article>
    </div>

  </div>

  {{-- SECCION DE INFORMACION --}}
  <div class='bgded overlay' style="background-image:url('../public/img/backgrounds/fondo2.jpg');">

    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Diseños hechos a tu medida</h5>
          <p class="card-text">Escribenos y queda con nosotros para que podamos plasmar tus mejores ideas para tatuajes en un diseño increible que te encantara toda tu vida.
            
          </p>
        </div>
      </div>


      <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>

      
      <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
      </div>
    </div>

  </div>


@endsection
