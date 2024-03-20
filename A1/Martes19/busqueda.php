<?php
    require_once 'conexion.php';
   
    
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $nombre = $_GET["nombre"];

        $sql = "SELECT * FROM tbl_empleados WHERE nombre = '$nombre'";
        $result = $conexion->query($sql);
        var_dump($result);
    }

?>