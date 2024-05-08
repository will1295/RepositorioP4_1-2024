<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/crear')}}" method="post">
        @csrf
        <input type="text" name="numero" id="numero" placeholder="Numero de telefono" required>
        <input type="text" name="tipo" id="tipo" placeholder="Tipo de linea" required>
        <select name="idusuario" id="idusuario">
            @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" value="Guardar datos">
    </form>
</body>
</html>