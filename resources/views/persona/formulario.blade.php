@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header ')
<h2>formulario de registro paso a paso</h2>
@stop

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Múltiples Pasos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form id="multiStepForm">
                <div class="form-group step" data-step="1">
                    <h3>Paso 1: Datos Personales</h3>
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                    <button class="btn btn-primary next-btn" type="button">Siguiente</button>
                </div>
                <div class="form-group step" data-step="2">
                    <h3>Paso 2: Datos Familiares</h3>
                    <label for="padre">Nombre del Padre:</label>
                    <input type="text" class="form-control" id="padre" name="padre" required>
                    <label for="madre">Nombre de la Madre:</label>
                    <input type="text" class="form-control" id="madre" name="madre" required>
                    <button class="btn btn-primary prev-btn" type="button">Anterior</button>
                    <button class="btn btn-primary next-btn" type="button">Siguiente</button>
                </div>
                <div class="form-group step" data-step="3">
                    <h3>Paso 3: Estudios</h3>
                    <label for="grado">Grado:</label>
                    <input type="text" class="form-control" id="grado" name="grado" required>
                    <button class="btn btn-primary prev-btn" type="button">Anterior</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        var currentStep = 1;

        $(".next-btn").click(function() {
            $(".step[data-step='" + currentStep + "']").hide();
            currentStep++;
            $(".step[data-step='" + currentStep + "']").show();
        });

        $(".prev-btn").click(function() {
            $(".step[data-step='" + currentStep + "']").hide();
            currentStep--;
            $(".step[data-step='" + currentStep + "']").show();
        });

        $("#multiStepForm").submit(function(e) {
            e.preventDefault();
            alert("Formulario enviado con éxito.");
        });
    });
</script>

</body>
@stop