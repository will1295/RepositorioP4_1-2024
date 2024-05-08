<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: solid black 1px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sede</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marcas as $marca)
            <tr>
                <td>{{$marca->nombre}}</td>
                <td>{{$marca->sede}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>