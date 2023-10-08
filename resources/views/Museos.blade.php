@extends('layouts.app')

@section('template_title')

@section('content')



<header class="header linear-white">
    <div class="container vh-50">
  
  <!-- navbar -->
  
 
   <!-- descripcion -->
  <div class="row  h-100 align-items-center">
  <div class="col-10 col-lg-6 text-black">
  <!-- title -->
  <h1 class="text-capitalize ">
    <span class="text-black h4">EQUIPO</span><br/>RATINGSOFT</h1>
  
  <!-- descripcion -->
  <p class="d-none d-md-blñock"style="color: black; font-size: 24px">"Nuestro equipo es un grupo de personas apasionadas por la educación y la tecnología. Somos programadores, diseñadores, trabajamos juntos para crear soluciones que hagan la vida más fácil a docentes, estudiantes y padres. Nuestra motivación es mejorar la forma en que se gestionan las calificaciones y, en última instancia, mejorar la calidad de la educación. Somos un equipo comprometido y apasionado que está listo para hacer una diferencia en la educación."




</p>
  <!--boton -->
  <a href="" class="text-reset btn btn-info">Saber más!</a>
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
        
        <div class="col-12 text-center">
        <h2 class="text-danger text-uppercase">RATINGSOFT</h2>
        <h3 class="text-capitalize">Equipo de trabajo</h3>
        <p class="text-muted" style="font-size: 22px;">"Nuestro equipo es un grupo de personas apasionadas por la educación y la tecnología. Somos programadores, diseñadores, trabajamos juntos para crear soluciones que hagan la vida más fácil a docentes, estudiantes y padres.
        
        </p>
        </div>

        <div class="row m-5">
    <div class="col-md-6 col-lg-4 mb-3 mb-md-0">
        <div class="card h-100">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage1">
                <img class="card-img-top rounded" src="img\alex.jpg" alt="Alex">
            </a>
            <div class="card-body">
                <h5 class="card-title">Alex</h5>
                <p class="card-text precio">DOCUMENTADOR<span></span></p>
                
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-3 mb-md-0">
        <div class="card h-100">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage2">
                <img class="card-img-top rounded" src="img\andy.jpg" alt="Andy">
            </a>
            <div class="card-body">
                <h5 class="card-title">Andy</h5>
                <p class="card-text precio">PROGRAMADOR<span></span></p>
                
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-3 mb-md-0">
        <div class="card h-100">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage3">
                <img class="card-img-top rounded" src="img\orozco.jpeg" alt="Orozco">
            </a>
            <div class="card-body">
                <h5 class="card-title">Orozco</h5>
                <p class="card-text precio">DESARROLLADOR<span></span></p>
                <button class="btn btn-primary">CIO</button>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-3 mb-md-0">
        <div class="card h-100">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage4">
                <img class="card-img-top rounded" src="img\evelyn.jpeg" alt="Evelyn">
            </a>
            <div class="card-body">
                <h5 class="card-title">Evelyn</h5>
                <p class="card-text precio">TESTER<span></span></p>
                
            </div>
        </div>
    </div>
</div>



          


        </div>

        {{-- modal --}}
        {{-- imafen#1 --}}
        <div tabindex="-1" aria-labelledby="modalimage1" aria-hidden="true" class="modal fade" id="modalimage1">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\alex.jpg" alt="">

                </div>

            </div>

        </div>



        {{-- imafen#2 --}}
        <div tabindex="-1" aria-labelledby="modalimage2" aria-hidden="true" class="modal fade" id="modalimage2">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\andy.jpg" alt="">

                </div>

            </div>

        </div>
        {{-- imafen#3 --}}
        <div tabindex="-1" aria-labelledby="modalimage3" aria-hidden="true" class="modal fade" id="modalimage3">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\orozco.jpeg" alt="">

                </div>

            </div>

        </div>


        {{-- imafen#4 --}}
        <div tabindex="-1" aria-labelledby="modalimage4" aria-hidden="true" class="modal fade" id="modalimage4">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\evelyn.jpeg" alt="">

                </div>

            </div>

        </div>
        {{-- imafen#5 --}}
        <div tabindex="-1" aria-labelledby="modalimage5" aria-hidden="true" class="modal fade" id="modalimage5">

     

            </div>

        </div>
    
        



        



        <div id="cards_landscape_wrap-2">
            <div class="container ">
                <div class="row">
                    @foreach ($lugar as $lugar)
                        @if ($lugar->tipolugar_id == 3)
                            
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
