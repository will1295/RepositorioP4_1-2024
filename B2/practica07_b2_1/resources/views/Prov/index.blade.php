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
    <h1>Listado de proveedores</h1>
    <table>
        <thead >
            <tr>
                <th>Nombre</th>
                <th>Telefono de contacto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prov as $pro)
            <tr>
                <td>{{$pro->nombre}}</td>
                <td>{{$pro->telcont}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>