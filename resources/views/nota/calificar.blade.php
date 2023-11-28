
@extends('adminlte::page')

@section('title', 'Calificar') 
@section('content_header')
    <h1 style="text-align: center">Formulario calificar</h1>
@stop

@section('content')
    <div class="card" style="width: 60%; margin-left:20%">
        <div class="card-body">
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('notasPeriodos',$idAsignatura) }}"> Volver</a>
            </div>
            <form method="POST" action="{{ route('calificar.store') }}"  role="form" enctype="multipart/form-data">
                @csrf
                <p>{{$idAsignatura}}</p>
                <div class="col-md-4">
                    {{ Form::label('Nota') }}
                    {{ Form::text('valor', $nota->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Nota']) }}
                    {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Detalle') }}
                    {{ Form::text('detalle', $nota->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el detalle']) }}
                    {!! $errors->first('datalle', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group ">
                    {{ Form::label('Descripcion') }}
                    {{ Form::textarea('descripcion', $nota->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''),'style' => 'height: 5rem;', 'placeholder' => 'Ingrese una descripcion']) }}
                    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="box-footer mt20">
                    <button type="submit" class="btn btn-primary">Calificar</button>
                </div>
                <input type="hidden" name="idPersona" value="{{$idEstudiante}}">
                <input type="hidden" name="idPeriodo" value="1">
                <input type="hidden" name="idAsignatura" value="{{$idAsignatura}}">
                <input type="hidden" name="fecha" value="2025-01-01">
            </form>
        </div>
    </div>
@endsection


