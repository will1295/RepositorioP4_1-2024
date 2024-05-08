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
    <h1>Inventario de productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Proveedor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prod as $pro)
            <tr>
                <td>{{$pro->nombre}}</td>
                <td>{{$pro->stock}}</td>
                <td>${{$pro->precio}}</td>
                <td>{{$pro->proveedores->nombre}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>