<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Carrera</th>
                <th>Materia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->codigo}}</td>
                <td>{{$estudiante->carrera}}</td>
                <td>{{$estudiante->materias->nombre}}</td>
            </tr>
            @endforeach()
        </tbody>
    </table>
</body>
</html>