<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('insertarpro')}}" method="post">
        @csrf
        <label for="nombre">Nombre del producto</label>
        <input id="nombre" name="nombre" type="text" required>
        <label for="precio">Precio</label>
        <input id="precio" name="precio" type="number" required min="0" step=".01">
        <label for="descripcion"Descripcion></label>
        <input id="descripcion" name="descripcion" type="text">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
