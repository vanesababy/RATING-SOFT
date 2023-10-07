@extends('layouts.app')

@section('template_title')

@section('content')



<header class="header linear-white">
    <div class="container vh-50">
  
  <!-- navbar -->
  
 
   <!-- descripcion -->
  <div class="row  h-100 align-items-center">
  <div class="col-10 col-lg-6 text-white">
  <!-- title -->
  <h1 class="text-capitalize ">
    <span class="text-danger h5">popayán</span><br/>turims</h1>
  
  <!-- descripcion -->
  <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nesciunt perferendis ullam molestias quae dolore! Ipsum cum quaerat repudiandae unde accusamus aut neque. At necessitatibus modi, natus eos corrupti animi.</p>
  <!--boton -->
  <a href="#" class="text-reset btn btn-danger">bye now</a>
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
        <h2 class="text-danger text-uppercase">popayán</h2>
        <h3 class="text-capitalize">un lugar donde encontraras lugares unicos </h3>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus officiis nesciunt in tempore voluptate, ab cumque qui delectus nisi assumenda a error eveniet beatae pariatur ut dolorem nihil explicabo fugit.
        
        </p>
        </div>
        <div class="row m-5 ">

            <div class="col-md-6 col-lg-4  mb-3 mb-md-0">

                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage1">
                    <img class="w-100 mb-4 rounded modal-galeria" src="img\Iglesia_San_Francisco_2.jpg" alt="">

                </a>
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage2">
                    <img class="w-100 mb-4 rounded modal-galeria" src="img\alrededores.jpg" alt=""></a>

            </div>
            <div class="col-md-6 col-lg-4  mb-3 mb-md-0">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage3">
                    <img class="w-100 mb-4 rounded modal-galeria" src="img\iglesia3.jpeg" alt=""></a>


                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage4">
                    <img class="w-100 mb-4 rounded modal-galeria" src="img\imagen4.jpg " alt=""></a>

            </div>
            <div class="col-md-6 col-lg-4 mb-3 mb-md-0">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage5">
                    <img class="w-100 mb-4 rounded modal-galeria" src="img\iglesai5.jpg" alt=""></a>

                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalimage6">
                    <img class="w-100 mb-4 rounded modal-galeria" src="img\iglesia6.jpg" alt=""></a>

            </div>


        </div>

        {{-- modal --}}
        {{-- imafen#1 --}}
        <div tabindex="-1" aria-labelledby="modalimage1" aria-hidden="true" class="modal fade" id="modalimage1">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\Iglesia_San_Francisco_2.jpg" alt="">

                </div>

            </div>

        </div>



        {{-- imafen#2 --}}
        <div tabindex="-1" aria-labelledby="modalimage2" aria-hidden="true" class="modal fade" id="modalimage2">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\alrededores.jpg " alt="">

                </div>

            </div>

        </div>
        {{-- imafen#3 --}}
        <div tabindex="-1" aria-labelledby="modalimage3" aria-hidden="true" class="modal fade" id="modalimage3">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\iglesia3.jpeg" alt="">

                </div>

            </div>

        </div>


        {{-- imafen#4 --}}
        <div tabindex="-1" aria-labelledby="modalimage4" aria-hidden="true" class="modal fade" id="modalimage4">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\imagen4.jpg" alt="">

                </div>

            </div>

        </div>
        {{-- imafen#5 --}}
        <div tabindex="-1" aria-labelledby="modalimage5" aria-hidden="true" class="modal fade" id="modalimage5">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\iglesai5.jpg" alt="">

                </div>

            </div>

        </div>
        {{-- imafen#6 --}}
        <div tabindex="-1" aria-labelledby="modalimage6" aria-hidden="true" class="modal fade" id="modalimage6">

            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="img\iglesia6.jpg" alt="">

                </div>

            </div>

        </div>
    
        <div class="row justify-content-md-center">
            <!-- en este pedaso se pone texto relacionado al tema de turismo -->
            
            <div class="col-12 text-center">
            <h2 class="text-danger text-uppercase">popayán</h2>
            <h3 class="text-capitalize">un lugar donde encontraras lugares unicos </h3>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus officiis nesciunt in tempore voluptate, ab cumque qui delectus nisi assumenda a error eveniet beatae pariatur ut dolorem nihil explicabo fugit.
            
            </p>
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
