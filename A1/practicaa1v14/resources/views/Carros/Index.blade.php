<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registros</h1>
    {{--
    <form action="{{route('formguardar')}}" method="get">
        <input type="submit" value="Agregar nuevo registro">
    </form>--}}
    <form action="{{url('/guardar')}}" method="get">
        <input type="submit" value="Agregar nuevo registro">
    </form>
    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
            <tr>
                <td>{{$carro->marca}}</td>
                <td>{{$carro->modelo}}</td>
                <td>{{$carro->placa}}</td>
                <td>
                    {{--
                    <a href="">Editar</a>
                    <a href="">Eliminar</a>--}}

                    <form action="{{route('formeditar',$carro->id)}}" method="get">
                        <input type="submit" value="Editar">
                    </form>
                    <form action="{{route('delete',$carro->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>