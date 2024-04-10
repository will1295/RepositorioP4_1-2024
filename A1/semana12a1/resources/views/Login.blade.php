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
        <label for="user">Usuario</label>
        <input id="user" name="user" type="text">
        <label for="pass">Contraseña</label>
        <input id="pass" name="pass" type="text">
        <input type="submit" value="Login">
    </form>
</body>
</html>