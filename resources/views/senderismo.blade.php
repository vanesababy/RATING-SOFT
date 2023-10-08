@extends('layouts.app')

@section('template_title')

@section('content')

    

        <section class="container">

            <div class="row justify-content-md-center">
                <!-- en esta parte  se pone texto relacionado al tema de turismo -->

                <div class="col-12 text-center">
                    <h2 class="text-info text-uppercase">RATINGSOFT</h2>
                    <h3 class="text-capitalize">"Transformando la educación con tecnología"</h3>
                    <p class="text-muted">
                    "En la era digital actual, la tecnología se ha convertido en una herramienta esencial para mejorar la eficiencia en todas las áreas, incluida la educación. Nuestro sistema de calificaciones móvil y web está diseñado para transformar la gestión académica. Con acceso fácil y seguro desde cualquier dispositivo, docentes, estudiantes y padres pueden mantenerse actualizados sobre el desempeño académico, fomentando una colaboración transparente y una educación de calidad. Descubre cómo la tecnología está cambiando la forma en que percibimos la gestión de calificaciones y la educación en general."
                    </p>
                </div>
            </div>



         {{-- #codigo para imagen. el tipo de lugar es el que hace que se ,ande el regsitro aqui --}}
            <div id="cards_landscape_wrap-2">
                <div class="container ">
                    <div class="row">
                        @foreach ($lugar as $lugar)
                            @if ($lugar->tipolugar_id == 2)
                                
                                <div class="card-imga col-3">
                                    <div class="text-box">
                                        <div class="face front col-3">
                                            <img  src="{{'http://localhost/popayanturims/public/storage/Fotos/'.$lugar->foto_url }} " width="95%"alt="" />
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

    <!-- galeria de los lugares -->
    {{-- <div class="text-center pt-5">
                    <div>
                        <h1 class="">galeria </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="row galeria">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3597423/pexels-photo-3597423.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/1005417/pexels-photo-1005417.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3621344/pexels-photo-3621344.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3692550/pexels-photo-3692550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3693787/pexels-photo-3693787.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                    </div>
                    <div>
                        <h1 class="">rutas mas populares
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                        <div id="cards_landscape_wrap-2">
                          <div class="container ">
                              <div class="row">
                                  @foreach ($lugar as $lugar)
                                  @if ($lugar->tipolugar_id == 2);
                                      <div class="card-flyer col-3">
                                          <div class="text-box">
                                              <div class="image-box ">
                                                  <img src="foto_url/{{ $lugar->foto_url }} " width="95%"alt="" />
                                              </div>
                                              <div class="text-container">
                                                  <h6 class="card-title">{{ $lugar->nombre }}
                                              </div>
                                          </div>
                                      </div>
                                         @endif
                                  @endforeach
 
                                </section>
                         </div>
                             <div class="card_ultima bg-dark">
                                    <div class="face front">
                                    <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=300"
                                        alt="imagen">
                                 <h3>holaaa</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </p>
                            <div class="link">
                                <a href="" class="" id="detalles">detalles </a>
                            </div>
                        </div>
                    </div> 
        </section> --}}

@endsection