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
                <th>Modelo</th>
                <th>Color</th>
                <th>Kilometraje</th>
                <th>Tipo</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
            <tr>
                <td>{{$carro->modelo}}</td>
                <td>{{$carro->color}}</td>
                <td>{{$carro->km}}</td>
                <td>{{$carro->tipoc}}</td>
                <td>{{$carro->idmarca}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>