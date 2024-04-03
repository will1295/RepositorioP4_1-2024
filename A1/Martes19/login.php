<?php

    require_once 'conexion.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        //Consulta que toma la informacion de php
        // y busca un usario y contra iguales algun registro
        //que este en la db

        $sql = "SELECT * FROM tbl_users WHERE username='$user' AND pass='$pass'";
        //$result = mysqli_query($conexion, $sql);
        $result = $conexion->query($sql);

        if($result->num_rows > 0){
            session_start();
            $_SESSION["username"] = $user;
            header("Location:dashboard.php");
            exit();
        }
        else{
            header("Location:login.php?error=credenciales");
            exit();

        }

        
    }
?>