<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff59d" />
    <title>SLA - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_dashboard.css')}}">
    @yield('style')
  </head>
  <body>

    {{-- Sidebar --}}
    <ul id="slide-out" class="sidenav sidenav-fixed">
      <li> <img class="responsive-img" src="" alt="Logo-Salon"> </li>
      <li id="home"> <a href="{{route('admin_home')}}"><i class="black-text fas fa-home"></i> Inicio</a> </li>
      <li id="clients"> <a href="{{route('admin_clients')}}"><i class="black-text fas fa-user"></i> Clientes</a> </li>
      <li id="new_client"> <a href="{{route('admin_new_client')}}"><i class="black-text fas fa-user-plus"></i> Registrar Cliente</a> </li>
      <li id="events"> <a href="{{route('admin_events')}}"><i class="black-text fas fa-calendar"></i> Eventos</a> </li>
      <li id="new_event"> <a href="{{route('admin_new_event')}}"><i class="black-text fas fa-calendar-plus"></i> Nuevo Evento</a> </li>
      <li id="charts"> <a href="{{route('admin_charts')}}"><i class="black-text fas fa-chart-bar"></i> Estadísticas</a> </li>
      <li class="hide-on-large-only"> <a href="#!">Cerrar Sesión</a> </li>
    </ul>

    <main>
      {{-- Navbar --}}
      <nav>
        <div class="nav-wrapper">
          <div class="container">
            <a href="#" data-target="slide-out" class="black-text sidenav-trigger left"><i class="material-icons">menu</i></a>
            <span class="black-text left">Usuario</span>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a class="black-text" href="#!">Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </nav>

      {{-- Content --}}
      <div class="container section">
        @yield('content')
      </div>
    </main>


  </body>
  <script src="https://kit.fontawesome.com/dc15f493f0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{asset('js/init.js')}}"></script>
  @yield('script')
</html>
