@extends('layouts.app')
@section('template_welcome')
@section('content')
               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!DOCTYPE html>
                    <html lang="es">
                      <head>
                        <meta charset="UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                        <title>RATINGSOFT</title>
                        <!-- CSS Bootstrap -->
                        <link rel="stylesheet" href="./css/bootstrap.min.css" />
                        <!-- CDN Font awesome -->
                        <link
                          rel="stylesheet"
                          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
                        />
                        <!-- CSS Main -->
                        <link rel="stylesheet" href="./css/main.css" />
                      </head>
                      <body>
                    
                        <!--header -->
                    <header class="header linear-white">
                      <div class="container vh-50">
                    
                    <!-- navbar -->
                    
                    
                     <!-- descripcion -->
                    <div class="row  h-100 align-items-center">
                    <div class="col-10 col-lg-6 text-white">
                    <!-- title -->
                    <h1 class="text-capitalize">
                     
                      <span class="text-info h5">RATING</span><br/>SOFT</h1>
                     
                    <!-- descripcion -->
                    <p class="d-none d-md-block">Contribuir en el proceso del manejo de calificaciones de una institución educativa,
mediante un sistema de información que permite el manejo y almacenamiento de calificaciones
de los estudiantes de una forma digital; tanto el estudiante como acudiente puede visualizar el
rendimiento académico.</p>
                    <!--boton -->
                    <a href="/resources/views/auth/register.blade.php" class="text-reset btn btn-info">Acceder</a>
                    </div>
                    
                    
                    </div>
                     {{-- <h2 class="text-center"> Hola {{ Auth::user()->name }}, Empieza tu avenetura en </h2>  --}}
                    
                    </div>
                     <!-- separador  con imagen -->
                    <img src="./img/cuts/cut-header.svg" alt="">
                    
                    </header>
                    
                    
                     <!--  text-cualquiera -experience -->
                    
                     <section class="container">
                    
                    <div class="row justify-content-md-center">
                    <!-- en este pedaso se pone texto relacionado al tema de turismo -->
                    
                    <div class="col-12 text-center">
                    <h2 class="text-danger text-uppercase">RATINGSOFT</h2>
                    <h3 class="text-capitalize">Sistematización de notas </h3>
                    <p class="text-muted">Este sistema de información ayudara en el proceso de manejo de calificaciones de estudiantes
de una institución educativa mediante su sistematización.
                    
                    </p>
                    </div>
                     <!-- card -->
                    <!-- card #1 -->
                    <article class="col-md-6 col-lg-4 card-effect mb-3 mb-md-0">
                    <div class="card">
                      <img src="https://media.istockphoto.com/photos/sunsets-on-popayan-picture-id1335778651?b=1&k=20&m=1335778651&s=170667a&w=0&h=xuqX7F6Jneu4UtyewJisccG4LgeXd9y_SkuCLBZYXxY=" 
                       alt="torre"    class="card-img  card-img-filter " />
                      <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="text-reset">Goooooo  moreeeee</a>
                      </div>
                    </div>
                    </article>
                    
                    <!-- card #2 -->
                    <article class="col-md-6 col-lg-4 card-effect  mb-3 mb-md-0">
                      <div class="card">
                        <img src="https://media.istockphoto.com/photos/church-of-santo-domingo-popayan-colombia-picture-id186073664?k=20&m=186073664&s=612x612&w=0&h=D7ALcBKY4zT2n-V6_8i8RJHxbbYg81VLRKgT4ajiAhk=" 
                         alt="iglesia"    class="card-img  card-img-filter " />
                        <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="text-reset">Goooooo  moreeeee</a>
                        </div>
                      </div>
                      </article>
                    
                      <!-- card #3-->
                    <article class="col-md-6 col-lg-4 card-effect mt-md-4 mt-lg-0">
                      <div class="card">
                        <img src="https://media.istockphoto.com/photos/the-ermita-on-a-dawn-picture-id1138490864?k=20&m=1138490864&s=612x612&w=0&h=IgOPRWbObv4qZ5qTaML1QAN5opx4aPJJV4JqewuGTIY=" 
                         alt="iglesia2"    class="card-img  card-img-filter " />
                        <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="text-reset">Goooooo  moreeeee</a>
                        </div>
                      </div>
                     </article>
                    </div>
                    </section>
                    
                     <!--  para lso comentiarios  -->
                    
                    <section class="comments linear-white mb-5">
                     <!--  imagen para separar las dos partes siempre fuera del container   -->
                    <img src="./img/cuts/cut-header.svg" alt="" class="transform-turn">
                    
                    <div class="container">
                      <div class="row">
                    <blockquote class="col-12  text-white text-center">
                    
                     <!-- img de la persona  -->
                    <img src="./img/john-doe.jpeg" alt="nombre de la persona juan " class="commets__img">
                      <!-- comentiario de la persona -->
                    <p class="d-none d-md-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi at impedit tempore sit, tempora, laboriosam quidem placeat quo, atque veritatis architecto! Amet soluta tempore nostrum nisi? Temporibus officia minus quod.</p>
                       <!-- name  -->
                    <footer class="blockquote-footer  text-white">
                    
                    <cite> Alex</cite>
                    </footer>
                    </blockquote>
                      </div>
                    </div>
                    </section>
                     <!--  no se que poner a qui "inspiration" -->
                    
                     <section class="container">
                    <div class="row">
                      <!--  titulo" -->
                      <div class="col-12 text-center">
                      <h3 class="text-danger text-uppercase h6">¿Qué puedes hacer en Popayán?</h3>
                      <h2 class="text-capitalize">Una sensación de paz envuelve a quienes caminan por las calles de Popayán. </h2>
                      <!--  media objeto 1 -->
                    <ul class="col-12 col-md-6 mt-3">
                    <li class="media">
                      <img src="./img/ggggg.jpg" alt="iglesia " class="media-object-img">
                      <div class="media-body">
                    <h5 class="h6 mb-0 mb-1">subtitle</h5>
                    
                    <h4 class="h5">
                      <a href=""> titluo de objeto </a>
                    </h4>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad distinctio sed eligendi porro quasi, ?</p>
                    
                    
                    
                    
                      </div>
                    </li>
                    
                    
                    <li class="media">
                      <img src="./img/ggggg.jpg" alt="iglesia " class="media-object-img">
                      <div class="media-body">
                    <h5 class="h6 mb-0 mb-1">subtitle</h5>
                    
                    <h4 class="h5">
                      <a href=""> titluo de objeto </a>
                    </h4>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad distinctio sed eligendi porro quasi, ?</p>
                    
                    
                    
                    
                      </div>
                    </li>
                    
                    
                    <li class="media">
                      <img src="./img/ggggg.jpg" alt="iglesia " class="media-object-img">
                      <div class="media-body">
                    <h5 class="h6 mb-0 mb-1">subtitle</h5>
                    
                    <h4 class="h5">
                      <a href=""> titluo de objeto </a>
                    </h4>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad distinctio sed eligendi porro quasi, ?</p>
                    
                    
                    
                    
                      </div>
                    </li>
                    </ul>
                      </div>
                    </section>
                       
                        <!-- carousel  -->
                        <section class="carousel slide" id="carousel-weston">
                          <div class="carousel-caption carousel-weston-middle">
                            <!-- algun titulo de acuerdo a las imagnes o al tema   -->
                            <h2 class="d-none d-md-block text-uppercase">senderismo </h2>
                            <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias velit officia perspiciatis voluptates cupiditate nulla quaerat autem illo, optio necessitatibus accusamus iste ea magni? Deleniti nostrum provident delectus quis modi?</p>
                            <button class="btn btn-light px4 text-capitalize d-none d-md-block mx-auto">
                              
                              <a href="{{ route('senderismo.index') }}">  GO!</a> 
                            </button>
                    
                          </div>
                          <div class="carousel-inner">
                              <!-- carousel#1  -->
                            <div class="carousel-item active">
                              <img src="./img/carousel/fother.webp" class="d-block w-100" alt="...">
                            </div>
                              <!-- carousel#2  -->
                            <div class="carousel-item">
                              <img src="./img/carousel/2.jpg" class="d-block w-100" alt="...">
                            </div>
                              <!-- carousel#3  -->
                            <div class="carousel-item">
                              <img src="./img/carousel/3.jpeg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                         <a href="#carousel-weston" class="carousel-control-prev" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                    
                        <a href="#carousel-weston" class="carousel-control-next" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                        </section>
                    
                    <!-- features  -->
                    <section class="section container p-5">
                    
                    <div class="div row">
                    <!-- title  -->
                    <div class="col-12 text-center">
                      <h3 class="text-danger text-uppercase h6">¿Qué puedes hacer en Popayán?</h3>
                      <h2 class="text-capitalize">Una sensación de paz envuelve a quienes caminan por las calles de Popayán. </h2>
                    </div>
                    <!-- agregar algo de ultimo  -->
                    </div>
                    
                    </section>
                    
                    
                     <!-- PIE de paginaaaa  "footer"-->
                        
                    
                    
                        
                        <!-- Jquery -->
                        <script src="./js/jquery-3.5.0.min.js"></script>
                        <!-- Popper -->
                        <script src="./js/popper.min.js"></script>
                        <!-- JS Bootstrap -->
                        <script src="./js/bootstrap.min.js"></script>
                      </body>
                    </html>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
