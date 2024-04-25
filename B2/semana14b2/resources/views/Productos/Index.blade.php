<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Listado de productos</h1>
    <a href="{{Route('forminsertar')}}">Agregar nuevo producto</a>
    <form action="{{Route('buscar')}}" method="get">
        <input type="text" name="nombre" id="nombre" placeholder="Buscar Nombre">
        <input type="submit" value="Buscar">   
    </form>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        </thead>
        <tbody>
            @php
                $registro = 1;
            @endphp
            @foreach($productos as $producto)
            <tr>
                <td>{{$registro}}</td>
                <td>{{$producto->nombre}}</td>
                <td>${{$producto->precio}}</td>
                <td>{{$producto->existencia}}</td>
            @php
                $registro++;
            @endphp
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>