@extends('layouts.app_admin')

@section('style')
  <link rel="stylesheet" href="{{asset('css/admin/charts.css')}}">
@endsection

@section('title', 'Estadísticas')

@section('content')
  <h3 class="center-align">Estadísticas</h3>
  <h5 class="center-align">Eventos durante el año</h5>
  <canvas id="graph1" width="400" height="200"></canvas>
  <h5 class="center-align">Eventos años pasados</h5>
  <canvas id="graph2" width="400" height="200"></canvas>
@endsection

@section('script')
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
  <script src="{{asset('js/charts.js')}}"></script>
@endsection
