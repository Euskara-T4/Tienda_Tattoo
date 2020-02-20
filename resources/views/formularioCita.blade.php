@extends('layouts.master')

@section('content')

    <h3> FORMULARIO CITAS TATTOO // PIERCING</h3>

    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4"> <strong>nombre</strong></label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="nombre">
          </div>
          <div class="form-group col-md-6">
            <label for="inputSubNamed4"> <strong>apellido</strong></label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="apellido">
          </div>
        </div>
        <label class="col-form-label col-sm-2 pt-0"> <strong>Que deseas?</strong></label>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Piercing
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Microdermal
        </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
            <label class="form-check-label" for="gridRadios3">
              Tatuaje
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4" >
            <label class="form-check-label" for="gridRadios4">
              eliminacion de Tatuaje
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="option5" >
            <label class="form-check-label" for="gridRadios5">
              Escarificacion
            </label>
          </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Horario</label>
            <select id="inputState" class="form-control">
              <option selected>elige la hora adecuada a tu necesidad</option>
              <option>9:00</option>
              <option>10:00</option>
              <option>11:00</option>
              <option>12:00</option>
              <option>13:00</option>
              <option>16:00</option>
              <option>17:00</option>
              <option>18:00</option>
              <option>19:00</option>
              <option>20:00</option>
              <option>21:00</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea">Pequeña descripcion de tu cita</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

@endsection
