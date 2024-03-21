<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php
     if(!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
    <form action="ingresar.php" method="post">
        <label for="usermail">Usuario/Email</label>
        <input type="text" name="usermail" id="usermail">
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
