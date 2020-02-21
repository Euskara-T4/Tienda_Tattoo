@extends('layouts.master')

@section('content')

    <h3> FORMULARIO CITAS TATTOO // PIERCING</h3>

    <form action="{{route('enviarFormulario')}}" method="post">
        @csrf

        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="inputName4"> <strong>nombre</strong></label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="nombre">
          </div>
          <div class="form-group col-md-6">
            <label for="inputSubNamed4"> <strong>apellido</strong></label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="apellido">
          </div>
        </div>
        <label class="col-form-label col-sm-2 pt-0"> <strong>Que deseas?</strong></label>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="lana_id" id="gridRadios1" value="1" checked>
          <label class="form-check-label" for="gridRadios1">
            Piercing
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="lana_id" id="gridRadios2" value="2">
          <label class="form-check-label" for="gridRadios2">
            Microdermal
        </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lana_id" id="gridRadios3" value="3" >
            <label class="form-check-label" for="gridRadios3">
              Tatuaje
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="lana_id" id="gridRadios4" value="4" >
            <label class="form-check-label" for="gridRadios4">
              eliminacion de Tatuaje
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="lana_id" id="gridRadios5" value="5" >
            <label class="form-check-label" for="gridRadios5">
              Escarificacion
            </label>
          </div>
          <div class="container">
            <div class="row">
                <div class='col-sm-6'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='datetime-local' name="ordutegia" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

{{-- 
            <div class="container">
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='date' name="data" class="form-control" />
                                <div class="form-group col-md-4">
                                    <label for="inputState">Horario</label>
                                    <select id="inputState" name="ordua" class="form-control">
                                      <option selected>elige la hora adecuada a tu necesidad</option>
                                      <option value="9:00:00">9:00</option>
                                      <option value="10:00:00">10:00</option>
                                      <option value="11:00:00">11:00</option>
                                      <option value="12:00:00">12:00</option>
                                      <option value="13:00:00">13:00</option>
                                      <option value="16:00:00">16:00</option>
                                      <option value="17:00:00">17:00</option>
                                      <option value="18:00:00">18:00</option>
                                      <option value="19:00:00">19:00</option>
                                      <option value="20:00:00">20:00</option>
                                      <option value="21:00:00">21:00</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}




        </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea">Pequeña descripcion de tu cita</label>
            <textarea class="form-control" for="descripcion" name="descripcion" id="descripcion" rows="5"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        @if (session('enviarFormulario'))
        <div class="alert alert-danger mt-3">
            {{session('enviarFormulario')}}
        </div>
    @endif
      </form>

@endsection
