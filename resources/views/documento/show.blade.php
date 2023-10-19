@extends('adminlte::page')

@section('template_title')
    {{ $documento->nombre ?? 'Ver Documento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Documento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('documentos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $documento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $documento->enlace }}
                        </div>
                        <div class="form-group">
                            <strong>idPersona:</strong>
                            {{ $documento->idPersona }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $documento->idTipoDocumento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
