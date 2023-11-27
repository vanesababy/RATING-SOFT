@extends('adminlte::page')

@section('title', 'NOTAS-PERIODO') 
@section('content_header')
    <h1 class="float">NOTAS PERIODOS</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="float-center">
            <a class="btn btn-primary mb-3" href="{{ route('notasPeriodos',$idAsignatura) }}"> Volver</a>
        </div>

        <label for="periodo" class="me-2">Seleccionar Periodo:</label>
        <div class="row d-flex align-items-end mb-3">
            <form id="filtroForm" class="d-flex align-items-end">
                @csrf
                <select name="periodo" id="periodo" class="form-select me-2">
                    <option value="">Todos</option>
                    @foreach ($periodos as $periodo)
                        <option value="{{ $periodo->id }}">{{ $periodo->periodo }}</option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-primary" onclick="filtrarPorPeriodo()">Filtrar</button>
            </form>
        </div>
        
    
        <table id="tuser" class="table table-striped">
            <thead class="bg bg-success">
                <tr>
                    <th>No</th>                             
                    <th>Detalle</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Nota</th>
                    <th>Periodo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr>
                        <td>{{$nota->id}}</td>                        
                        <td>{{$nota->detalle}}</td>
                        <td>{{$nota->descripcion}}</td>
                        <td>{{$nota->fecha}}</td>                        
                        <td>{{$nota->valor}}</td>
                        <td>{{$nota->periodo->periodo}}</td>
                        <td>
                            <form action="{{ route('notas.destroy',$nota->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('calificar.edit',$nota->id) }}" class="btn btn-success">Editar</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script>  
var dataTable = $('#tuser').DataTable({
    responsive: true,
    autoWidth: false,
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado - disculpa",
        "info": "Mostrando la página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "search": 'Buscar registro',
        "paginate": {
            'next': 'Siguiente',
            'previous': 'Anterior'
        }
    }
});

function filtrarPorPeriodo() {
    var periodoSeleccionado = $('#periodo').val()
    window.location.href = "{{ route('notasPeriodoIndividual',$idAsignatura)}}" + "?periodo=" + periodoSeleccionado;
}
</script>
@endsection

