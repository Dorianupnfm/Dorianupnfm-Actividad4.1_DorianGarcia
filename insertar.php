<?php
include_once('Conexion.php');
try{
    $sql = "INSERT INTO usuarios (nombre,apellido) VALUES('Pedro','Garcia')";
    if ($conexion->query($sql)===true)
        echo "Registro creado correctamente";
    else {
        throw new Exception ($conexion->error);
    }
} catch (Exception $e){
    echo $e->getMessage();
} finally{
    $conexion->close();
}