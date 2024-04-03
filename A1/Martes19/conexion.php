<?php

    $conexion = mysqli_connect("localhost","root","","aut_a1");

    if($conexion->connect_error){
        die("Error". $conexion->connect_error);
    }


?>