<?php

    require_once("conexion.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usermail = $_POST['usermail'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM tbl_users 
        WHERE (username = '$usermail' OR email='$usermail') AND password='$password'";
        $resultado = $conexion->query($sql);

        if($resultado->num_rows > 0){
            session_start();
            header("Location:Home.php");
            exit();
        }
        else{
            $error = "Usuario o contraseña incorrecto";
            header("Location:login.php?error=".urldecode($error));
        }
    }



?>