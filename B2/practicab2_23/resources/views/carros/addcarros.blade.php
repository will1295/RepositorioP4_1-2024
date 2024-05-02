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
        <input type="text" name="marca" id="marca" placeholder="Marca" required>
        <input type="text" name="modelo" id="modelo" placeholder="Modelo" required>
        <input type="text" name="color" id="color" placeholder="Color" required>
        <input type="number" name="year" id="year" placeholder="Año" min="1965" required>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>