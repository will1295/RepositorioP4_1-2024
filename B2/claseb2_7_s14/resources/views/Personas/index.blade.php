<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Altura</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>        
            @foreach($personas as $persona)
            
            <tr>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->apellido}}</td>
                <td>{{$persona->edad}} años de edad</td>
                <td>{{$persona->altura}} m</td>
                <td>{{$persona->peso}} lb</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>