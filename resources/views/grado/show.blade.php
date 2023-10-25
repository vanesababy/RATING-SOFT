@extends('adminlte::page')

@section('template_title')
    {{ $grado->grado ?? 'Ver Grado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grados.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $grado->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $grado->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $grado->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $grado->fechaFin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
