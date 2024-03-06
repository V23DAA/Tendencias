@extends('layouts.applogin')

@section('tittle','Login')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-danger">
    <div class="card-header">
      <a href="../../index2.html" class="h1 "><b>Fruteria</b></a>
    </div>
    <div class="card-body"> <!--Cuerpo-->
      <p class="login-box-msg h4">Inicio de Sesion</p>

      <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder = "Correo de usuario">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
        </div>
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder = "Contraseña">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-danger btn-block">ingresar</button>
          </div>
          
          <div class="col-6">
            <a href="{{route('register')}}" class="btn btn-danger btn-block">Registrar</a>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <p class="mb-1">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvide mi contraseña') }}
                    </a>
                @endif
                </p>
            </div>
        </div>
     


      </form>

      
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection
