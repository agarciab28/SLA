@extends('layouts.app_admin')

@section('style')
  <link rel="stylesheet" href="{{asset('css/admin/clients.css')}}">
@endsection

@section('title', 'Clientes')

@section('content')
  <h3 class="center-align">Lista de Usuarios</h3>
  <table class="responsive-table centered striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Télefono</th>
        <th>Más Detalles</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Alejandro</td>
        <td>García</td>
        <td>Barajas</td>
        <td>4431170346</td>
        <td> <a href="#" class="btn"> <i class="fas fa-info"></i> </a> </td>
        <td> <a href="#" class="btn"> <i class="fas fa-trash-alt"></i></a> </td>
      </tr>
      <tr>
        <td>Alejandro</td>
        <td>García</td>
        <td>Barajas</td>
        <td>4431170346</td>
        <td> <a href="#" class="btn"> <i class="fas fa-info"></i> </a> </td>
        <td> <a href="#" class="btn"> <i class="fas fa-trash-alt"></i> </a> </td>
      </tr>
    </tbody>
  </table>
@endsection
