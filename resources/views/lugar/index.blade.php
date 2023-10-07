@extends('adminlte::page')

@section('title', 'lugares') 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    @endsection

@section('content')
<div class="card">
    <div >
        <a href="{{ route('lugars.create') }}" class="btn btn-primary btn-sm "
            data-placement="left">
            {{ __('Nuevo') }}
        </a>
      
            <a href="{{ route('lugarpdf') }}" class="btn btn-danger btn-sm "
            data-placement="left">
            {{ __('PDF') }}
        </a>
&nbsp;
    
    </div>
    <div class="card-body">

  
<table id="tuser" class="table table-striped">

    <thead class="bg bg-success">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Horarios</th>
            <th>Descripcion</th>
            <th>Tipolugar</th>
            <th>Foto</th>
           
            <td></td>
           
          
        </tr>
    </thead>

<tbody>
   
    

    
    @foreach ($lugars as $lugar )


<tr>
        <td>{{ ++$i }}</td>

        <td>{{ $lugar->nombre }}</td>
        <td>{{ $lugar->direccion }}</td>
        <td>{{ $lugar->horarios }}</td>
        <td >{{ $lugar->descripcion }}</td>
        <td >{{ $lugar->tipolugar_id}}</td>
        
        <td>  <img  src="{{ 'http://localhost/popayanturims/public/storage/Fotos/'.$lugar->foto_url }} " width="15%" style="border-radius:28px"/></td>
        <td width="280px">
        

                                                
                <form action="{{ route('lugars.destroy', $lugar->id) }}" method="POST" class="formEliminar">
                    <a class="btn btn-sm btn-primary "
                        href="{{ route('lugars.show', $lugar->id) }}"><i
                            class="fa fa-fw fa-eye"></i> Show</a>
                    <a class="btn btn-sm btn-success"
                        href="{{ route('lugars.edit', $lugar->id) }}"><i
                            class="fa fa-fw fa-edit"></i> Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i
                            class="fa fa-fw fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
       
@endforeach

</tbody>

</table>
{!! $lugars->links() !!}
</div>
</div>

@endsection

@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script>  $('#tuser').DataTable({
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
