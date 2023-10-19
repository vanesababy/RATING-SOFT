<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Documento') }}
            {{ Form::text('nombre', $documento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tipo Documento']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Documento') }}
            {{ Form::file('documento', $documento ->enlace, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'enlace']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Documento') }}
            {{ Form::text('tipoDocumento', $documento->idTipoDocumento, ['class' => 'form-control' . ($errors->has('tipoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tipo Documento']) }}
            {!! $errors->first('tipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Persona') }}
            {{ Form::text('persona', $documento->idPersona, ['class' => 'form-control' . ($errors->has('persona') ? ' is-invalid' : ''), 'placeholder' => 'Persona ']) }}
            {!! $errors->first('persona', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>