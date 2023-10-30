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
                            <label for="identificacion">Identificacion</label>
                            <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                        </div>
                        <div class="form-group">
                            <label for="primerNombre">Primer Nombre</label>
                            <input type="text" class="form-control" id="primerNombre" name="primerNombre" required>
                        </div>
                        <div class="form-group">
                            <label for="SegundoNombre">Segundo Nombre</label>
                            <input type="text" class="form-control" id="SegundoNombre" name="SegundoNombre" required>
                        </div>
                        <div class="form-group">
                            <label for="primerApellido">Primer Apellido</label>
                            <input type="text" class="form-control" id="primerApellido" name="primerApellido" required>
                        </div>
                        <div class="form-group">
                            <label for="segundoApellido">Segundo Apellido</label>
                            <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaNacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                        </div>
                        <button class="btn btn-primary next-btn" type="button">Siguiente</button>
                    </div>

                    <div class="form-group step step-2" data-step="2">
                        <h3 class="titulo">Datos Contacto</h3>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefonoFijo">Teléfono Fijo</label>
                            <input type="tel" class="form-control" id="telefonoFijo" name="telefonoFijo" required>
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="tel" class="form-control" id="celular" name="celular" required>
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