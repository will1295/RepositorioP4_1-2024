<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:solid 1px black
        }
    </style>

</head>
<body>
    <h1>Listado de telefonos</h1>
    <table>
        <thead >
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($telefonos as $tlf)
            <tr>
                <td>{{$tlf->numero}}</td>
                <td>{{$tlf->tipo}}</td>
                <td>{{$tlf->usuarios->nombre}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>