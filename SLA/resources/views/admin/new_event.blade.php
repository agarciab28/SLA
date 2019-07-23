@extends('layouts.app_admin')

@section('style')
  <link rel="stylesheet" href="{{asset('css/admin/new_event.css')}}">
@endsection

@section('title', 'Nuevo Evento')

@section('content')
  <h3 class="center-align">Registrar Evento</h3>
  <div class="row">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col m6 s12">
          <select>
            <option value="" disabled selected>Elige una Opción</option>
            <option value="M">Alejandro García (asfdes34235dafsa)</option>
          </select>
          <label>Cliente</label>
        </div>
        <div class="input-field col m6 s12">
          <input id="date" name="date" type="text" class="datepicker no-autoinit">
          <label for="date"> Fecha </label>
        </div>
        <div class="input-field col m6 s12">
          <select>
            <option value="" disabled selected>Elige una Opción</option>
            <option value="M">XV Años</option>
          </select>
          <label>Tipo de Evento</label>
        </div>
        <div class="input-field col m6 s12">
          <input id="people" name="people" type="number" value="200" min="0">
          <label for="people"> Cantidad de Personas </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="time" name="time" type="text" class="timepicker no-autoinit">
          <label for="time"> Hora de Inicio </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="hours" name="hours" type="number" default="5" value="5" min="0">
          <label for="hours"> Horas de Duración </label>
        </div>
        <div class="input-field col m6 s12">
          <select>
            <option value="" disabled selected>Elige una Opción</option>
            <option value="M">Rojo</option>
          </select>
          <label>Color</label>
        </div>
      </div>
      <div class="row">
        <div class="col s4 push-s4" style="margin-top:3em">
          <a href="" class="btn">Registrar</a>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('script')

@endsection
