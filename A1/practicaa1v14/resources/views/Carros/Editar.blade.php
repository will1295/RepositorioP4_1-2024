<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',$registro->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="marca" id="marca" placeholder="Marca" value="{{$registro->marca}}">
        <input type="text" name="modelo" id="modelo" placeholder="Modelo" value="{{$registro->modelo}}">
        <input type="text" name="placa" id="placa" placeholder="Placa" value="{{$registro->placa}}">
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>