@extends('adminlte::page')

@section('template_title')
    {{ $curso->name ?? 'Show Curso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre Curso:</strong>
                            {{ $curso->nombreCurso }}
                        </div>
                        <div class="form-group">
                            <strong>Id Curso:</strong>
                            {{ $curso->idCurso }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $curso->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $curso->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor Encagado:</strong>
                            {{ $curso->profesorEncargado }}
                        </div>
                        <div class="form-group">
                            <strong>Cupo:</strong>
                            {{ $curso->cupo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Inicio:</strong>
                            {{ $curso->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $curso->fechaFin }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
