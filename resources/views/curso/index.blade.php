
@extends('adminlte::page')

@section('title', 'Cursos') 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    @endsection

@section('content')
<div class="card">
    <div >

        @can('curso.create')
            <a href="{{ route('cursos.create') }}" class="btn btn-primary btn-sm"
                data-placement="left">
                {{ __('Nuevo') }}
            </a>
        @endcan
        
    <div class="card-body">

<table id="tven" class="table table-striped">

    <thead class="bg bg-success">
        <tr>
            <th>No</th>
            <th>Nombre Curso</th>
            <th>Id Curso</th>
            <th>Grado</th>
            <th>Descripcion</th>
            <th>Profesor Encargado</th>
            <th>Cupo</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
   
        @foreach ($cursos as $curso)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $curso->nombreCurso }}</td>
            <td>{{ $curso->idCurso }}</td>
            <td>{{ $curso->grado }}</td>
            <td>{{ $curso->descripcion}}</td>
            <td>{{ $curso->profesorEncargado }}</td>
            <td>{{ $curso->cupo }}</td>
            <td>{{ $curso->fechaInicio }}</td>
            <td>{{ $curso->fechaFin }}</td>

            <td>
                <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST" class="eliminar">
                    @can('curso.show')
                        <a class="btn btn-sm btn-primary " href="{{ route('cursos.show',$curso->id) }}"><i class="fa fa-fw fa-eye" class="sho"></i> Ver</a>
                    @endcan

                    @can('curso.edit')
                        <a class="btn btn-sm btn-success" href="{{ route('cursos.edit',$curso->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                    @endcan
                    
                    @csrf
                    @method('DELETE')

                    @can('curso.destroy')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                    @endcan
                    
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
{!! $cursos->links() !!}
</div>
</div>

@endsection

@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script>  $('#tven').DataTable({
responsive: true,
autoWidth:false,
"language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ total registros totales)",
            "search": 'Buscar registro',
            "paginate": {
                'next':'siguiente',
                'previous':'Anterior'
            }
        }

}); 
</script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        (function() {
            'use strict'
            //debemos crear la clase formEliminar dentro del form del boton borrar
            //recordar que cada registro a eliminar esta contenido en un form  
            var forms = document.querySelectorAll('.eliminar')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        event.preventDefault()
                        event.stopPropagation()
                        Swal.fire({
                            title: '¿Confirma la eliminación del registro?',
                            imageUrl: 'img/asombro.png',
                            //   icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#20c997',
                            cancelButtonColor: '#6c72bd',
                            confirmButtonText: 'Confirmar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                this.submit();
                                Swal.fire('¡Eliminado!',
                                    'El registro ha sido eliminado exitosamente.', 'success');
                            }
                        })
                    }, false)
                })
        })()
    </script>
@endsection
