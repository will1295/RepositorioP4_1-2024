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
        <input type="text" name="marca" id="marca" placeholder="Marca" required value="{{$registro->marca}}">
        <input type="text" name="modelo" id="modelo" placeholder="Modelo" required value="{{$registro->modelo}}">
        <input type="text" name="color" id="color" placeholder="Color" required value="{{$registro->color}}">
        <input type="number" name="year" id="year" placeholder="Año" min="1965" required value="{{$registro->year}}">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
