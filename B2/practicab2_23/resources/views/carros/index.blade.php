<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
{{--
<a href="{{route('createform')}}">Agregar nuevo registro</a>
<a href="{{url('/form')}}">Agregar nuevo registro</a>--}}

<form action="{{url('/crear')}}" method="get">
    <button type="submit">Agregar nuevo registro</button>
</form>

<body>
    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Año</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
            <tr>
                <td>{{$carro->marca}}</td>
                <td>{{$carro->modelo}}</td>
                <td>{{$carro->color}}</td>
                <td>{{$carro->year}}</td>
                <td>
                <form action="{{route('editform',$carro->id)}}" method="get">
                    <button type="submit">Editar</button>
                </form>
                <form action="{{route('borrar',$carro->id)}}" method="post">
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