<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('crear')}}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto" required>
        <input type="number" name="precio" id="precio" placeholder="Precio $" required min=0 step="0.01">
        <input type="number" name="existencia" id="existencia" placeholder="Existencias" required min=0>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>