<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',$personas->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" required value="{{$personas->nombre}}">
        <input type="text" name="apellido" id="apellido" placeholder="Apellido" required value="{{$personas->apellido}}">
        <input type="number" name="edad" id="edad" placeholder="Edad"  required value="{{$personas->edad}}">
        <input type="number" name="altura" id="altura" placeholder="Altura en metros" step=".01" min=0 required value="{{$personas->altura}}">
        <input type="number" name="peso" id="peso" placeholder="Peso en libras" step=".01" min=0 required value="{{$personas->peso}}"> 
        <input type="submit" value="Guardar datos">
    </form>
</body>
</html>