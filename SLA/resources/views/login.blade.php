@extends('layouts.app_login')

@section('content')
  <div class="img_background">
    <div class="color_background">
      <div class="center">
        <div class="row">
          <div class="col s12">
            {{-- Logo --}}
            <img src="" alt="Logo Salon" class="responsive-img">
            {{-- Card Login --}}
            <div class="card">
              <div class="section container">
                <span class="card-title">Inicio de Sesión</span>
              </div>
              <div class="card-content">
                <div class="row">
                  {{-- form login --}}
                  <form class="col s12" action="index.html" method="post">
                    <div class="row">
                      <div class="input-field col m6 s12">
                        <input id="user" type="text" class="validate">
                        <label for="user"> <i class="fas fa-user"></i> Usuario </label>
                      </div>
                      <div class="input-field col m6 s12">
                        <input id="password" type="password" class="validate">
                        <label for="password"> <i class="fas fa-lock"></i> Contraseña </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col m4 6 push-m4 push-s3">
                        <a href="{{route('admin_home')}}" class="btn">Iniciar Sesión</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
