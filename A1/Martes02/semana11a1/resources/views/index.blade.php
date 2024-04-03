<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de envio de datos</h1>
    <form action="/" method="post">
        @csrf
        <label for="dui">DUI</label>
        <input type="text" id="dui" name="dui" required>
        <label for="telefono">Numero de telefono</label>
        <input type="text" id="telefono" name="telefono" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>