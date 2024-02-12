<?php
include_once('Conexion.php');
try {
    $sql="DELETE FROM usuarios WHERE id=2";
    if ($Conexion->query ($sql)===true)
        echo "Registro Eliminado Correctamente";
    else{
        throw new Exception ($Conexion->error);
    }
} catch (Exception $e){
    echo $e->getMessage();
} finally{
    $conexion->close();
}