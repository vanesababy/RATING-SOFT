<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Curso') }}
            {{ Form::text('nombreCurso', $curso->nombreCurso, ['class' => 'form-control' . ($errors->has('nombreCurso') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Curso']) }}
            {!! $errors->first('nombreCurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Curso') }}
            {{ Form::text('idCurso', $curso->idCurso, ['class' => 'form-control' . ($errors->has('idCurso') ? ' is-invalid' : ''), 'placeholder' => 'id curso']) }}
            {!! $errors->first('idCurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grado') }}
            {{ Form::text('grado', $curso->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'grado', 'oninput' => 'this.value = this.value.replace(/[^0-9]/g, "")']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $curso->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Profesor Encargado') }}
            {{ Form::text('profesorEncargado', $curso->profesorEncargado, ['class' => 'form-control' . ($errors->has('profesorEncargado') ? ' is-invalid' : ''), 'placeholder' => 'profesorEncargado']) }}
            {!! $errors->first('profesorEncargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cupo') }}
            {{ Form::number('cupo', $curso->cupo, ['class' => 'form-control' . ($errors->has('cupo') ? ' is-invalid' : ''), 'placeholder' => 'cupo']) }}
            {!! $errors->first('cupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de inicio') }}
            {{ Form::date('fechaInicio', $curso->fechaInicio, ['class' => 'form-control' . ($errors->has('fecha de inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Inicio']) }}

            {!! $errors->first('fecha de inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha fin') }}
            {{ Form::date('fechaFin', $curso->fechaFin, ['class' => 'form-control' . ($errors->has('fecha fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>