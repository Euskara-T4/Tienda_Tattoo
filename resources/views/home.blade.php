@extends('layouts.master')

@section('content')

  {{-- PAGINA INICIAL --}}
  <section  style="background-image:url('./img/backgrounds/fondo6.jpg'); background-attachment: fixed;" class="overlay bgded" >
    <div class="hoc clear text-center">
      <article class="p-5">
        <h3 class="heading"> Ink Heart Tattoo en Bilbao </h3>
        <p> Bienvenido a la página web del Estudio profesional de tatuajes Ink heart tattoo, el cual esta situado en Bilbao</p>
      </article>
    </div>
  </section>

  {{-- SECCION DE INFORMACION --}}
  <section style="background-image:url('./img/backgrounds/fondo2.jpg');background-attachment: fixed; " class="overlay" >
    <div class='bgded  container'>
      <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="https://tattooadicts.com/wp-content/uploads/1-1.png
          " alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">DISEÑOS PERSONALIZADOS DE TATUAJES</h5>
            <p class="card-text">En Bilbao nos encanta que cada persona tenga su propio diseño, para ello, realizamos una sesión de dibujo en Bilbao, donde intercambiamos ideas y creamos un primer en primer boceto en papel. </p>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="https://tattooadicts.com/wp-content/uploads/2-1-1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">DIFERENTES ESTILOS DE TATUAJES

            </h5>
            <p class="card-text">En nuestro estudio de tatuaje en Bilbao, nos adaptamos a tu estilo. Nuestros profesionales de vanguardia conocen las últimas tendencias del mundo del tattoo y las aplican en cada uno de los diseños que realizan, en esbozo y sobre piel.</p>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="https://tattooadicts.com/wp-content/uploads/3-1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">ARTISTAS DEL TATUAJE LOCALES E INTERNACIONALES</h5>
            <p class="card-text">Además de los tatuadores bilbaínos de la casa, estamos presentes en el circuito internacional de tatuadores, con visitas de artistas de distintos estilos (oldschool, realista, oriental…) y procedencias.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
