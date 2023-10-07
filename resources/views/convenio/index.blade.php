
@extends('adminlte::page')

@section('title', 'Covenios') 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    @endsection

@section('content')
<div class="card">
    <div class="card-body">

<table id="tcon" class="table table-striped">

    <thead class="bg bg-success">
        <tr>
            <th>No</th>
	        <th>Fecha</th>
	        <th>Direccion</th>
	        <th>Telefono</th>
	        <th>Correo</th>
            <th>Tipconvenios Id</th>
            <th>Lugares Id</th>
             <th></th>
        </tr>
    </thead>

    <tbody>
    @foreach ($convenios as $convenio)
  
        <tr>
     <td>{{ ++$i }}</td>    

    <td>{{ $convenio->fecha }}</td>
    <td>{{ $convenio->direccion }}</td>
    <td>{{ $convenio->telefono }}</td>
    <td>{{ $convenio->correo }}</td>
    <td>{{ $convenio->tipconvenios_id }}</td>
    <td>{{ $convenio->lugares_id }}</td>

        <td width="280px">
                                                
          
            <form action="{{ route('convenios.destroy',$convenio->id) }}" method="POST">
                <a class="btn btn-sm btn-primary " href="{{ route('convenios.show',$convenio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                <a class="btn btn-sm btn-success" href="{{ route('convenios.edit',$convenio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
            </form>
            </td>
        </tr>
       
@endforeach
 
</tbody>

</table>
{!! $convenios->links() !!}
</div>
</div>

@endsection

@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script>  $('#tcon').DataTable({
responsive: true,
autoWidth:false,
"language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ total registros totales)",
            "search": 'Buscar regstro',
            "paginate": {
                'next':'sigiente',
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
            var forms = document.querySelectorAll('.formEliminar')
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
