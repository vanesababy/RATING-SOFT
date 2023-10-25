<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Grado') }}
            {{ Form::text('grado', $grado->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $grado->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Inicio') }}
            {{ Form::date('fechaInicio', $grado->fechaInicio, ['class' => 'form-control' . ($errors->has('fechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Inicio']) }}
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Fin') }}
            {{ Form::date('fechaFin', $grado->fechaFin, ['class' => 'form-control' . ($errors->has('fechaFin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Fin']) }}
            {!! $errors->first('fechaFin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>