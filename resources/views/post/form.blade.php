<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="imagenSeleccionada"  height="80">
            {{ Form::label('imagen_url') }}
            {{ Form::file('imagen_url', $post->imagen_url, ['class' => 'form-control' . ($errors->has('imagen_url') ? ' is-invalid' : ''), 'placeholder' => 'Imagen Url']) }}
            {!! $errors->first('imagen_url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contenido') }}
            {{ Form::textarea('Contenido', $post->Contenido, ['class' => 'form-control' . ($errors->has('Contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
            {!! $errors->first('Contenido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('users_id') }}
            {{ Form::text('users_id', $post->users_id, ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''), 'placeholder' => 'Users Id']) }}
            {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>