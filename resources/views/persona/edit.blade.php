@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h1 style="margin-left:40%"><span class="pf pf-atm">Actualizar Perfil</span></h1>
@stop

@section('content')
    <div class="card" style="width:50%; margin-left:25%">
        <div class="card-body">
            <form action="{{ route('personas.update', ['id' => Auth::user()->id]) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="text-center">
                    <h4>{{ Auth::user()->name }}</h4>
                    <img src="{{ asset('storage/Avatar/'. Auth::user()->Avatar) }}"
                        style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px">
                </div>

                <div class="form-group">
                    <label for="Avatar">Cambiar Avatar</label>
                    <input type="file" class="form-control" name="Avatar" id="Avatar" accept="image/png, image/jpeg">
                </div>

                <div class="form-group">
                    <label for="name">Nombre de Usuario</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="identificacion">Identificación</label>
                    <input type="text" name="identificacion" value="{{ Auth::user()->persona->identificacion }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nombre1">Primer Nombre</label>
                    <input type="text" name="nombre1" value="{{ Auth::user()->persona->nombre1 }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nombre2">Segundo Nombre</label>
                    <input type="text" name="nombre2" value="{{ Auth::user()->persona->nombre2 }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellido1">Primer Apellido</label>
                    <input type="text" name="apellido1" value="{{ Auth::user()->persona->apellido1 }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" name="apellido2" value="{{ Auth::user()->persona->apellido2 }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="fechaNac">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNac" value="{{ Auth::user()->persona->fechaNac }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" value="{{ Auth::user()->persona->direccion }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="telefonoFijo">Teléfono Fijo</label>
                    <input type="text" name="telefonoFijo" value="{{ Auth::user()->persona->telefonoFijo }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" value="{{ Auth::user()->persona->celular }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="perfil">Perfil</label>
                    <input type="text" name="perfil" value="{{ Auth::user()->persona->perfil }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <input type="text" name="sexo" value="{{ Auth::user()->persona->sexo }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="rh">Rh</label>
                    <input type="text" name="rh" value="{{ Auth::user()->persona->rh }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="rutaFoto">Ruta de la Foto</label>
                    <input type="text" name="rutaFoto" value="{{ Auth::user()->persona->rutaFoto }}" class="form-control">
                </div>

                <div class="row text-center mb-4 mt-5">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-danger" id="formSubmit">Guardar cambios</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop
