@extends('layouts.app')

@section('template_title')
    Update Ruta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Ruta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rutas.update', $ruta->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ruta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
