<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-5">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'RATINGSOFT') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <script src="js/index.js"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS Main -->
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm ">

            <a class="navbar-brand text-info" href="{{ url('home') }}">
                 <img src="./img/descarga.png" alt="" width="50%" height="50%">
            </a>

            <a class="navbar-brand text-info" href="{{ url('home') }}">
                {{ config('', 'RATINGSOFT') }}
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- aqui las rutas -->
                <ul class="navbar-nav me-auto menu">



                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('iglesias') }}">{{ __('Misión') }}</a>
                    <li class="nav-item">


                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('hoteles.index') }}">{{ __('Visión') }}</a>
                    <li class="nav-item   text-white">
                        <a class="nav-link  text-white" href="{{ route('museos.index') }}">{{ __('Sobre Nosotros') }}</a>
                    <li class="nav-item  text-white">
                        <a class="nav-link  text-white"
                            href="{{ route('senderismo.index') }}">{{ __('Saber más!') }}</a>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <button id="logboton" type="submit" class="btn btn-outline-primary mb-4 button_color">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </button>
                        @endif
                        @if (Route::has('register'))
                            <button id="registro" type="submit" class="btn btn-outline-primary mb-4 button_color">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </button>
                        @endif
                    @else


                        <li class="nav-item dropdown">
                            <a 
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ 'http://localhost/popayanturims/public/storage/Avatar/' . Auth::user()->Avatar }}"
                                    style="width: 40px; height:40px; float: left; border-radius:50px; margin-right:25px">

                            </a>
                            <p class="text-danger"> {{ Auth::user()->name }}</p>

                         
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                              <a class="dropdown-item" href="{{ route('ActualizarPerfil') }}">
                                {{ __('Tu Perfil') }}
                            </a>
  
                                
            

                                <a class="dropdown-item  fas fa-fw fa-hotel"   href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Crrar session') }}
                                  </a>
                               
                              </div>
                          
                              

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>
    </div>


    @yield('content')




    {{-- Footer  pie de pagina --}}
    <footer class="text-center text-lg-start  text-muted color-fondo p-2">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block  ">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>RATINGSOFT
                        </h6>
                        <p>
                        "RATINGSOFT es la solución definitiva para simplificar y mejorar la gestión de calificaciones en su institución educativa. Este software ha sido diseñado pensando en docentes, estudiantes y padres por igual. Con RATINGSOFT, los docentes pueden registrar y actualizar fácilmente las calificaciones de sus alumnos
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Nosotros
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Java-scrip</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">PHP</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">HTML:5 y CSS:3</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 ">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contactos
                        </h6>
                        <p><i class="fas fa-home me-3"></i>CL 19 N #3-27</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            ratingsoft@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 57 318 746 81 60</p>
                        <p><i class="fas fa-print me-3"></i> + 57 312 624 26 64</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ratingsoft@gmail.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js')

</body>

</html>
