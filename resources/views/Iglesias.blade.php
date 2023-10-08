@extends('layouts.app')

@section('template_title')

@section('content')
    {{-- <div class="container text-center mt-5 bg-gray bold">
    <h1>Iglesias Popayan</h1>
</div> --}}

    
<header class="header linear-white iglesia-img">
    <div class="container vh-50">
  
  <!-- navbar -->
  
 
   <!-- descripcion -->
  <div class="row  h-100 align-items-center">
  <div class="col-10 col-lg-6 text-black">
  <!-- title -->
  <h1 class="text-capitalize ">
    <span class="text-block h5">RATING</span><br/>SOFT</h1>
  
  <!-- descripcion -->
  <p class="d-none d-md-block" style="color: black; font-size:20px">RATINGSOFT es un software el cual te facilita la sistematización de información de
administrativos, alumnos y profesores, esto te permite registrar, editar y eliminar información
dependiendo el usuario al que pertenezca, este proyecto surge debido a la manera en que los
profesores llevan a cabo el manejo de calificaciones, este sistema de información va dirigido
especialmente para el ámbito educativo exactamente para una institución de educación media.</p>

  <!--boton -->
  <a href="http://127.0.0.1:8000/senderismo" class="text-reset btn btn-info">Saber más!</a>
  </div>
  
  
  </div>
   <!-- 44 -->
  
  </div>
   <!-- separador  con imagen -->
  <img src="./img/cuts/cut-header.svg" alt="">
  
  </header>
<section class="container">

    <div class="row justify-content-md-center">
        <!-- en este pedaso se pone texto relacionado al tema de turismo -->
        
        </p>
        </div>
        <div class="row m-5 ">

            

        </div>

    
        <div class="row justify-content-md-center">
            <!-- en este pedaso se pone texto relacionado al tema de turismo -->
            
            <div class="col-12 text-center">
            <h2 class="text-danger text-uppercase">RATINGSOFT</h2>
            <h3 class="text-capitalize">Inspirados por la excelencia </h3>
            
            </div>
        </div>



        <div id="cards_landscape_wrap-2">
            <div class="container ">
                <div class="row">
                    @foreach ($lugar as $lugar)
                        @if ($lugar->tipolugar_id == 1)
                            
                            <div class="card-imga col-3">
                                <div class="text-box">
                                    <div class="face front col-3">
                                        <img  src="{{ 'http://localhost/popayanturims/public/storage/Fotos/'.$lugar->foto_url }} " width="95%"alt="" />
                                        <h3>{{ $lugar->nombre }}</h3>
                                    </div>
                                    <div class="face back">
                                        <div class="text-container">
                                            <h3>{{ $lugar->descripcion }}</h3>
                                            <h3>Direccion: {{ $lugar->direccion }}</h3>
                                            <h3>Horarios: {{ $lugar->horarios }}</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
             </section>
          </header>
          @endsection
