<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="marca" id="marca" placeholder="Marca">
        <input type="text" name="modelo" id="modelo" placeholder="Modelo">
        <input type="text" name="placa" id="placa" placeholder="Placa">
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>