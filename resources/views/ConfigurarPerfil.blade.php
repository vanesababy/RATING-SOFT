@extends('layouts.app')

@section('template_title')
    Editar perfil
@endsection

@section('content')
    <style>
        body {
            background: #2b2b2c;
            margin-top: 20px;
        }

        
        .me-2 {
            margin-right: .5rem !important;
        }

        #cal {
            margin-right: .5rem !important;
            position: relative;
        }

        .contenedor-btn-file input[type="file"] {
            appearance: none;
            display: none;
            visibility: hidden;
            opacity: 0;

        }

        .contenedor-btn-file {
            display: inline-block;
            position: relative;
            background-color: blue;
            color: #ffffff;

            border-radius: 8px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 15);
            overflow: hidden;
            transition: ease-out 120ms background-color: blue;

        }

        .contenedor-btn-file:hover {
            background-color: blue;

        }

        .contenedor-btn-file:focus {
            background-color: blue;

        }

        .contenedor-btn-file>i {
            margin-right: 15px;
        }

        .contenedor-btn-file label {
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 0;
            top: 0;
            left: 0;
            cursor: pointer;
        }

        #i12 {
            margin-left: 20%;


        }

        #i123 {
            margin-left: 20%;

        }


        #c123 {
            margin-left: 16%;
            width: 80%;
            height: 80;
            margin: 1px;
            margin-top: 5%;
            border-radius: 5%;
            background: hsla(0, 8%, 53%, 0.2);
            backdrop-filter: blur(5px);

        }

        #cal {
           

            width:100%;
            height:50% ;
            background: hsla(0, 8%, 53%, 0.2);
            backdrop-filter: blur(5px); 
        }

        .card{
            width:90%;
          
            background-image: linear-gradient(80deg, #aaffca 0, #97ffca 12.5%, #7dfdc9 25%, #5af2c4 37.5%, #10e4be 50%, #00d6b9 62.5%, #00cbb7 75%, #00c2b9 87.5%, #00bcbd 100%); 
        }
    </style>

    <form method="POST" action="{{ route('Actualizar') }}" role="form" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="main-body">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body" id="cal">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ 'http://localhost/popayanturims/public/storage/Avatar/' . Auth::user()->Avatar }} "
                                        style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px">
                                    <div class="mt-3">
                                        <h4>{{ auth::user()->name }}</h4>
                                        <p class="text-secondary mb-1">Admin</p>
                                        <button class="btn btn-primary">Correo</button>
                                        <button class="btn btn-outline-primary">Mis Post</button>

                                        <div class="contenedor-btn-file">
                                            <label for="bnt-file">Adjuntar imagen</label>
                                            <input type="file" name="Avatar" id="bnt-file"
                                                accept="image/png, image/jpeg">
                                        </div>
                                    </div>
                                </div>
                                <h1 style="text-align:center">Actualizar Datos</h1>
                                <div id="i12" class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-lg-8 control-label" for="name">Nombre de Usuario</label>
                                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                                            class="form-control">
                                    </div>
                                </div>



                                <div id="i123" class="col-sm-6 ">
                                    <div class="form-group ">
                                        <label for="name">correo</label>
                                        <input style="align:center" type="email" name="email"
                                            value="{{ Auth::user()->email }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row text-center mb-4 mt-5">
                                    <div class="cold-md-12">
                                        <button type="submit" class=" btn btn-danger" id="formSubmit">Guardar
                                            cambios</button>

                                    </div>



                                </div>
                            </div>
                        
                        {{-- <div class="col-lg-8">
                            <div class="card" id="c123">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <div class="col-sm-3">



                                        </div>
                                    </div>
                                </div>
 --}}


                                {{-- token de seguridad --}}







                            </div>

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
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
