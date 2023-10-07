@extends('layouts.app')

@section('template_title')
   Mis publicaciones
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mis Publicaciones</title>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    </head>

    <body>
        <button>
        <a href="{{route('posts.create')}}">Nuevo post</a>
    </button>
        <div id="cards_landscape_wrap-2">
            <div class="container ">
                <div class="row">
                    @foreach ($posts as $post)
                     @foreach ($post->images  as $image) 
                    @if(auth()->user()->id == $post->users_id)
                        <div class="card-imga col-3">
                            <div class="text-box">
                                <div class="face front col-3">
                                    <img src="{{ 'http://localhost/popayanturims/public/storage/imagenes/' . $image->url }} "
                                        width="95%"alt="" />

                                </div>
                                <div class="face back">
                                    <div class="text-container">
                                        <img src="{{ 'http://localhost/popayanturims/public/storage/Avatar/'.Auth::user()->Avatar }}"
                                    style="width: 40px; height:40px; float: left; border-radius:50px; margin-right:25px">
                                        <td>{{ $post->Contenido }}</td>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        </div>

        <div class="container ">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header ">
                            <h1 class="text-danger">crea tu post</h1>

                            <form method="POST" action="{{ route('posts.store') }}" role="form"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="grid grid-cols-1 mt-5 mx-7">
                                    <img id="imagenSeleccionada" height="90">
                                    {{ Form::label('imagen_url') }}
                                    {{ Form::file('imagen_url',['class' => 'form-control' . ($errors->has('foto_url') ? ' is-invalid' : ''), 'placeholder' => 'sellecione una foto para la vista previa ']) }}
                                    {!! $errors->first('imagen_url', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <textarea name="Contenido" id="summernote" cols="30" rows="10"></textarea>
                                <button type="submit" class="btn bnt-danger">enviar</button>



                            </form>
                        </div>
                    </div>
                </div>
            </div>


    <script>
        $('#summernote').summernote({
            placeholder: 'contenido',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],

                ['view', ['fullscreen', 'codeview', 'help']]
            ]

        });
    </script>



    <div class="grid grid-cols-1 mt-5 mx-7">
        <img id="imagenSeleccionada" height="80">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </form>
    <script>
        $(document).ready(function(e) {
            $('#imagen_url').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#imagenSeleccionada').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>

    </div>
    </body>

    </html>
@endsection
