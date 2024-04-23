<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('crear')}}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
        <input type="number" name="edad" id="edad" placeholder="Edad"  required>
        <input type="number" name="altura" id="altura" placeholder="Altura en metros" step=".01" min=0 required>
        <input type="number" name="peso" id="peso" placeholder="Peso en libras" step=".01" min=0 required>
        <input type="submit" value="Guardar datos">
    </form>
</body>
</html>