@extends('adminlte::page')

@section('title', 'notas') 
@section('content_header')
    <h1 style="text-align: center">Notas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-group">
            @foreach ($materias as $materia)
                <div class="card mx-2" style="width: 15rem;">
                    <img src="{{ asset('../../../public/img/fondo2.jpeg') }}" class="card-img-top" alt="..." style="max-width: 100px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$materia->nombreAsignatura}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Calificar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
