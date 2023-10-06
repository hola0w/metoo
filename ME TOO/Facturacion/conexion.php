<?php

    $nombreServidor = "DESKTOP-C7HHKTM";
    $usuario = "sa";
    $contrasena = "123456789";
    $nombreBaseDatos = "me-too";

    try {

        $conn = new PDO("sqlsrv:server=$nombreServidor;database=$nombreBaseDatos", $usuario, $contrasena);

        //echo "Conexion exitosa en el servidor $nombreServidor";
        
    } catch (Exception $e) {
        echo "Ocurrió un error en la conexion. " .$e->getMessage();
    }

?>