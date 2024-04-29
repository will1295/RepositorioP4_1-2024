<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<a href="{{route('crearpro')}}">Insertar nuevo producto</a>

<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>
                    <a href="{{route('editar',$producto->id)}}">Editar</a>
                    <form action="{{route('eliminar',$producto->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    
</body>
</html>