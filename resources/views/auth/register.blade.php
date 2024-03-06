
@extends('layouts.appregister')

@section('tittle','Register')

@section('content')

<div class="register-box">
    <div class="card card-danger">
      <div class="card-header text-center">
        <p class="login-box-msg h1">REGISTRARSE</p>
      </div>
      <div class="card-body">
  
        <form method="POST" action="{{ route('register') }}">
            @csrf
        
         <div class="input-group mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder = "Ingrese su nombre">
            
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          
          <div class="input-group mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder = "Ingrese su correo">
           
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>



          <div class="input-group mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label> 
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder = "Digite una contraseña">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              

        </div>
    </div>



          <div class="input-group mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder = "Digite su contraseña">
            
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          
            <!-- /.col -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-danger btn-block text-center">Registrarse</button>  
             </div>

          
            <!-- /.col -->
          </div>
        </form>
  
       
      
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  
@endsection


