


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT reporte lugares</title>
    <link href="{{public_path('css/app.css')}}" rel="stylesheet" type="text/css" >
</head>
<body>
<h2>Popayan Turims reporte </h2>

    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
               
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Horarios</th>
                <th>Descripcion</th>
                <th></th>
                <th></th>

                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lugars as $lugar)
                <tr>
                    <td></td>

                    <td>{{ $lugar->nombre }}</td>
                    <td>{{ $lugar->direccion }}</td>
                    <td>{{ $lugar->horarios }}</td>
                    <td>{{ $lugar->descripcion }}</td>
                    
                    <td>
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>