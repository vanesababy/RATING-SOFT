

@extends('adminlte::page')

@section('title', 'Usuarios') 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    @endsection

@section('content')
<div class="card">
    <div class="card-body">

  
<table id="tupos" class="table table-striped">

    <thead class="bg bg-success">
        <tr>
            <th>No</th>
            <th>contenido</th>
            <th>user_id</th>
            <th></th>
         
        </tr>
    </thead>

<tbody>
    @foreach ($posts as $post)
    <tr>
        <td>{{ ++$i }}</td>

        <td>{{ $post->Contenido }}</td>
        <td>{{ $post->users_id }}</td>

        <td>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                <a class="btn btn-sm btn-primary "
                    href="{{ route('posts.show', $post->id) }}"><i
                        class="fa fa-fw fa-eye"></i> Show</a>
                <a class="btn btn-sm btn-success"
                    href="{{ route('posts.edit', $post->id) }}"><i
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
</div>
</div>

@endsection

@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script>  $('#tupos').DataTable({
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
@endsection
