@extends('layouts.master')

@section('content')
  <nav aria-label="breadcrumb" class="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Preguntas</li>
        </ol>
    </div>
  </nav>

  <section style="background-image:url('./img/backgrounds/fondo7.jpg');" class="overlay bgded pb-5" >
    <div class="container">
      <h2 class="text-center heading"> CUIDADO DEL TATUAJE </h2>
      <hr/>
      <p>Es recomendable mantener la zona tatuada cubierta con film osmótico durante unas horas para prevenir posibles infecciones. También es recomendable evitar tocar la zona del tatuaje, así como arrancarse las costras. En cuanto al lavado del tatuaje, las primeras veces es altamente recomendable el uso de un jabón bactericida y lavarlo 3 veces al día.</p>

      <p>Procedimiento a seguir para lavar el tatuaje:</p>
        <ol>
          <li class="pb-2">Lavarlo con agua templada y gel neutro con la mano. <strong>Nunca usar esponja.</strong></li>
          <li class="pb-2">Secar cuidadosamente con <strong>papel de cocina</strong> con ligeros toques.</li>
          <li class="pb-2">Una vez limpio y seco aplicar una pequeña cantidad de la <strong>pomada cicatrizante</strong> aconsejada por tu tatuador, extendiéndola con un buen masaje hasta que el tatuaje quede hidratado y brillante.</li>
        </ol>

      <p>Durante el primer mes es prudente no tomar el sol, ni bañarse en playas, piscinas, jacuzzis, lagos ni tomar rayos UVA.
      <br/>Aún cuando esté totalmente curado, un tatuaje es más sensible a los rayos del sol, por lo que es recomendable utilizar protección solar alta para protegerlo.
      <br/>Es también importante recordar que las autoridades sanitarias recomiendan no hacerse tatuajes en zonas en las que posteriormente tenga que realizarse una inyección.</p>


      <h2 class="text-center heading"> PREGUNTAS RECIENTES </h2>
      <hr/>

      <div id="accordion">
        {{-- PREGUNTA 1 --}}
        <div class="card col-12">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿ Realizarme un tatuaje es doloroso ?
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                El área del cuerpo a tatuar, así como la tolerancia de cada persona, hace que la sensación sea de mayor o menor dolor, cuando se tatúa cerca del hueso la sensación es un poco más fuerte que donde hay más músculo o grasa.
                <br/><img src="https://www.blessedartgallery.com/wp-content/uploads/2015/08/zonas-dolor.png" class="mt-4" alt="img">
              </div>
          </div>
        </div>

        {{-- PREGUNTA 2 --}}
        <div class="card col-12">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿ Después de realizar mi tatuaje podré donar sangre ?
            </button>
            </h5>
          </div>

          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Sí claro, siempre y cuando sea después de 3, 6 o hasta 12 meses. La sangre no se contamina con las tintas a menos que el proceso no se lleve a cabo con la higiene adecuada,
                por eso es importante que te lo hagas en un estudio profesional, que te informes bien y que verifiques que su área de trabajo sea la adecuada. Si en un banco de sangre no te aceptan,
                  están discriminándote.
                  <br/>  <br/>
                  Depende el país en donde estés, es que se da un periodo de espera ante una situación de riesgo, misma que puede ser por relaciones sexuales sin protección, compartir agujas etc
            </div>
          </div>
        </div>

        {{-- PREGUNTA 3 --}}
          <div class="card col-12">
            <div class="card-header" id="headingFor">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                    ¿ Usarán anestesia ?
                </button>
              </h5>
            </div>

            <div id="collapseFor" class="collapse" aria-labelledby="headingFor" data-parent="#accordion">
              <div class="card-body">
                No, es riesgoso eso es algo que sólo un especialista puede hacer y nosotros no somos anestesiólogos,
                lo mejor es que mantengas una respiración larga y profunda y asimiles la sensación de ardor y así sobrellevarlo.
              </div>
            </div>
          </div>

          {{-- PREGUNTA 4 --}}
          <div class="card col-12">
            <div class="card-header" id="headingSix">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    ¿ De qué forma se realiza la pigmentación en mi piel ?
                </button>
              </h5>
            </div>

            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
              <div class="card-body">
                Cuando tenemos la aguja, ésta entra a la epidermis, de ahí sigue a la dermis,
                en esta parte nuestro cuerpo cuenta con unas células que se llaman macrófagos,
                estas células detectan a la tinta como un agente externo al organismo,
                ocasionando que éstas encapsulen la tinta impidiéndola moverse, por ese motivo tenemos “células pintadas” que hacen la pigmentación.
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

@endsection
