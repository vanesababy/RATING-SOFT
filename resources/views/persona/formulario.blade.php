@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
 <h1 class="titulo">Actualizar Perfil</h1>
@stop
@section('content')
<div class="bg-custom">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>  
                <form id="multiStepForm">
                    <div class="form-group step step-1" data-step="1">
                        <h3 class="titulo">Datos Personales</h3>
                        <div class="form-group">
                            {{ Form::label('Primer Nombre') }}
                            {{ Form::text('nombre1', $persona->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
                            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Segundo Nombre') }}
                            {{ Form::text('nombre2', $persona->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
                            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Primer Apellido') }}
                            {{ Form::text('apellido1', $persona->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
                            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Segundo Apellido') }}
                            {{ Form::text('apellido2', $persona->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
                            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Fecha de Nacimiento') }}
                            {{ Form::date('fechaNac', $persona->fechaNac, ['class' => 'form-control' . ($errors->has('fechaNac') ? ' is-invalid' : '')]) }}
                            {!! $errors->first('fechaNac', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <button class="btn btn-primary next-btn" type="button">Siguiente</button>
                    </div>

                    <div class="form-group step step-2" data-step="2">
                        <h3 class="titulo">Datos Contacto</h3>
                        <div class="form-group">
                            {{ Form::label('Direccion') }}
                            {{ Form::text('direccion', $persona->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Correo Electronico') }}
                            {{ Form::text('email', $persona->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
                            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Telefono Fijo') }}
                            {{ Form::text('telefonoFijo', $persona->telefonoFijo, ['class' => 'form-control' . ($errors->has('telefonoFijo') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Fijo']) }}
                            {!! $errors->first('telefonoFijo', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Celular') }}
                            {{ Form::text('celular', $persona->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <button class="btn btn-primary prev-btn" type="button">Anterior</button>
                        <button class="btn btn-primary next-btn" type="button">Siguiente</button>
                    </div>

                    <div class="form-group step step-3" data-step="3">
                        <h3 class="titulo">Datos Familiares</h3>
                        <div class="form-group">
                            <label for="padre">Nombre del Padre</label>
                            <input type="text" class="form-control" id="padre" name="padre" required>
                        </div>
                        <div class="form-group">
                            <label for="madre">Nombre de la Madre</label>
                            <input type="text" class="form-control" id="madre" name="madre" required>
                        </div>
                        <button class="btn btn-primary prev-btn" type="button">Anterior</button>
                        <button class="btn btn-primary next-btn" type="button">Siguiente</button>
                    </div>

                    <div class="form-group step step-4" data-step="4">
                        <h3 class="titulo">Estudios</h3>
                        <div class="form-group">
                            <label for="grado">Grado</label>
                            <input type="text" class="form-control" id="grado" name="grado" required>
                        </div>
                        <button class="btn btn-primary prev-btn" type="button">Anterior</button>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.titulo {
    padding-top: 2rem;
    font-family: sans-serif;
    text-align: center;
    transform: translateY(-25%);
}

    
.progress {
    margin-bottom: 30px;
  }
  
  .progress-bar {
    transition: width 0.3s;
  }
  </style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Oculta todos los pasos excepto el primero
        $(".step").not("[data-step='1']").hide();
        
        var currentStep = 1;

        $(".next-btn").click(function() {
            $(".step[data-step='" + currentStep + "']").hide();
            currentStep++;
            $(".step[data-step='" + currentStep + "']").show();
            var progress = (currentStep - 1) * 25; // Calcula el progreso
            $(".progress-bar").css("width", progress + "%");
        });

        $(".prev-btn").click(function() {
            $(".step[data-step='" + currentStep + "']").hide();
            currentStep--;
            $(".step[data-step='" + currentStep + "']").show();
            var progress = (currentStep - 1) * 25; // Calcula el progreso
            $(".progress-bar").css("width", progress + "%");
        });

        $("#multiStepForm").submit(function(e) {
            e.preventDefault();
            alert("Formulario enviado con éxito.");
        });
    });
</script>
</div>
@stop