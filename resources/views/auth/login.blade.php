@extends('layouts.app')

@section('content')

<section class=" text-center text-lg-start">
    <style>
  .gradient-custom {
    background: #6a11cb;
/* fallback for old browsers */
background-image:url("img/login.jpg");
background-repeat: no-repeat;
background-size: cover;


}

.card-body {
    border-radius: 5%;
    background: hsla(200, 100%, 80%, 0.7); /* HSLA con opacidad azul claro */
    backdrop-filter: blur(15px); /* No es necesario 'solid(1)' aquí */
}



#boton1{
color:rgb(255, 255, 255);
letter-spacing: 4px;
font-size: 18px;
border:10px;
border: 2px solid #feffff;
width: 150px;
height: 10%;

transition: 0.5s;

}
 #boton1:hover{
background: #44918f;
box-shadow: 0 0 10px #9ade1d, 0 0 40px 
#9ade1d, 0 0 80px #9ade1d;

 }
 #log{
font-size: 45px;
color: #fdfffe;


 }


    </style>
 
<section class="vh-100 gradient-custom ">
    <div class="container py-6 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
         
            <div class="card-body p-5 text-center" style="color:black; font-size:20px">
            <p  id="log">Iniciar Sesión</p>
  
                <form method="POST" action="{{ route('login') }}" class="allog">
                    @csrf

                    <div class="form-outline mb-4">
                        <label for="email" class="col-md-4 col-form-label" style="font-size: 18px; color:black">{{ __('Correo Electrónico ') }}</label>

                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') es incorrecto  @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="col-md-4 col-form-label" style="font-size: 18px; color:black">{{ __('Contraseña') }}</label>

                        <div class="form-outline mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordar contraseña') }}
                                </label>
                            </div>
                        </div>
                    </div>

                  

                    <br></br>


                    
                


                    <button  class="btn btn-white"  type="submit" id="boton1"> 
                        {{ __('Continuar') }}
                    </button>
                    <br><br>
                    


                    <hr class="my-1">

                    @if (Route::has('password.request'))
    <div class="mb-3">
        <a class="btn btn-danger" href="{{ route('password.request') }}">
            {{ __('¿Olvidó su contraseña?') }}
        </a>
    </div>
@endif

            <div class="mb-3">
         <a href="http://127.0.0.1:8000/" class="btn btn-primary">Atrás</a>
    </div>

            
        </div>
    </div>
</div>
</div>
@endsection
@section('js')


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       $("#boton1").click(function(){

Swal.fire("eddd")
       });
    </script>
@endsection
