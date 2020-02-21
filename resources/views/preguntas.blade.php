@extends('layouts.master')

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
      <li class="breadcrumb-item active">Preguntas</li>
    </ol>
  </nav>

  <h3> PREGUNTAS RECIENTES </h3>

  <div id="accordion">

    {{-- PREGUNTA 1 --}}
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            ¿Realizarme un tatuaje es doloroso?
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            El área del cuerpo a tatuar, así como la tolerancia de cada persona, hace que la sensación sea de <br>
              mayor o menor dolor, cuando se tatúa cerca del hueso la sensación es un poco más fuerte que donde hay más músculo o grasa.</div>
              <img src="https://www.blessedartgallery.com/wp-content/uploads/2015/08/zonas-dolor.png" alt="">
      </div>
    </div>


    {{-- PREGUNTA 2 --}}
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            ¿Se puede o debe reusar el equipo?
        </button>
        </h5>
      </div>

      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
            Hay partes del equipo reusables, previa esterilización profesional y etiquetado, como son grips y tubos, todo lo demás es de un sólo uso y debe estar nuevo y esterilizado, ejemplo: agujas, guantes, cubrebocas, etc.
        </div>
      </div>
    </div>

    {{-- PREGUNTA 3 --}}
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            ¿Después de realizar mi tatuaje podré donar sangre?
        </button>
        </h5>
      </div>

      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
            Sí claro, siempre y cuando sea después de 3, 6 o hasta 12 meses. La sangre no se contamina con las tintas a menos que el proceso no se lleve a cabo con la higiene adecuada,<br>
            por eso es importante que te lo hagas en un estudio profesional, que te informes bien y que verifiques que su área de trabajo sea la adecuada. Si en un banco de sangre no te aceptan,<br>
              están discriminándote. Depende el país en donde estés, es que se da un periodo de espera ante una situación de riesgo, misma que puede ser por relaciones sexuales sin protección, compartir agujas etc <br>
        </div>
      </div>
    </div>

    {{-- PREGUNTA 4 --}}
    <div class="card">
        <div class="card-header" id="headingFor">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                ¿Usarán anestesia?
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

      {{-- PREGUNTA 5 --}}
      <div class="card">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Qué cuidados debo tener después con mi tatuaje?
            </button>
          </h5>
        </div>

        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body">
            Básicamente lavar el tatuaje con agua tibia, jabón neutro y aplicar la pomada que el tatuador recomiende. <br>
            Todo eso por unos 15 días, recuerda que cada persona es distinta y cicatriza de diferente manera. También hay que evitar albercas, <br>
            baños públicos, agua del mar y el Sol. Procura lo más sano, lo mejor para una buena y pronta cicatrización. <br>
          </div>
        </div>
      </div>

      {{-- PREGUNTA 6 --}}
      <div class="card">
        <div class="card-header" id="headingSix">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                ¿De qué forma se realiza la pigmentación en mi piel?
            </button>
          </h5>
        </div>

        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
          <div class="card-body">
            Cuando tenemos la aguja, ésta entra a la epidermis, de ahí sigue a la dermis,<br>
            en esta parte nuestro cuerpo cuenta con unas células que se llaman macrófagos,<br>
            estas células detectan a la tinta como un agente externo al organismo,<br>
            ocasionando que éstas encapsulen la tinta impidiéndola moverse, por ese motivo tenemos “células pintadas” que hacen la pigmentación. <br>
          </div>
        </div>
      </div>
  </div>


@endsection
