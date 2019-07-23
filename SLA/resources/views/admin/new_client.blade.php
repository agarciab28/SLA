@extends('layouts.app_admin')

@section('style')
  <link rel="stylesheet" href="{{asset('css/admin/new_client.css')}}">
@endsection

@section('title', 'Nuevo Cliente')

@section('content')
  <h3 class="center-align">Registrar Cliente</h3>
  <div class="row">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col m6 s12">
          <input id="name" name="name" type="text" class="validate">
          <label for="name"> Nombre </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="lastname" name="lastname" type="text" class="validate">
          <label for="lastname"> Apellido Paterno </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="lastname_m" name="lastname_m" type="text" class="validate">
          <label for="lastname_m"> Apellido Materno </label>
        </div>
        <div class="input-field col m6 s12">
          <select>
            <option value="" disabled selected>Elige una Opción</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
            <option value="O">Otro</option>
          </select>
          <label>Género</label>
        </div>
        <div class="input-field col m6 s12">
          <input id="state" name="state" type="text" class="validate">
          <label for="state"> Estado </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="city" name="city" type="text" class="validate">
          <label for="city"> Ciudad </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="hood" name="hood" type="text" class="validate">
          <label for="hood"> Colonia </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="street" name="street" type="text" class="validate">
          <label for="street"> Calle </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="number" name="number" type="text" class="validate">
          <label for="number"> Número </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="phone" name="phone" type="tel" class="validate">
          <label for="phone"> Télefono </label>
        </div>
        <div class="input-field col s12">
          <input id="rfc" name="rfc" type="text" class="validate">
          <label for="rfc"> RFC </label>
        </div>
      </div>
      <div class="row">
        <div class="col s4 push-s4">
          <a href="" class="btn">Registrar</a>
        </div>
      </div>
    </form>
  </div>
@endsection
