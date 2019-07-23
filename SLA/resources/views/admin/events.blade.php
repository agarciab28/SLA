@extends('layouts.app_admin')

@section('style')
  <link rel="stylesheet" href="{{asset('css/admin/events.css')}}">
@endsection

@section('title', 'Eventos')

@section('content')
  <h3 class="center-align">Eventos</h3>
  <table class="responsive-table centered striped">
    <thead>
      <tr>
        <th>Contrato</th>
        <th>Tipo</th>
        <th>Personas</th>
        <th>Fecha</th>
        <th>Horario</th>
        <th>Cliente</th>
        <th>Teléfono</th>
        <th>Ver Contrato</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>XV años</td>
        <td>200</td>
        <td>21/07/2019</td>
        <td>17:00</td>
        <td>Alejandro García Barajas</td>
        <td>4431170346</td>
        <td> <a href="#" class="btn"> <i class="fas fa-file"></i> </a> </td>
      </tr>
    </tbody>
  </table>
@endsection
