<?php

    $conexion = mysqli_connect("localhost"
    ,"root","","b2_base_1");

    if($conexion->connect_error){
        die("Error: ". $conexion->connect_error);
    }
    else{
        echo "Conexión realizada exitosamente";
    }

?>