@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h1 style="margin-left:40%"><span class="pf pf-atm">Actualizar Perfil</span></h1>
@stop

@section('content')
    <div class="card" style="width:50%; margin-left:25%">
        <div class="card-body">
            <form action="{{ route('personas.update', ['id' => Auth::user()->id]) }}" method="POST" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('persona.formulario')
            </form>
        </div>
    </div>
@stop
