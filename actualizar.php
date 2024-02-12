<?php
include_once ('Conexion.php');
try{
    $sql="UPDATE usuarios SET apellido='Brito',nombre='Allan' WHERE id=1";
    if ($conexion->query ($sql)===true)
        echo "Registro actualizado Correctamente";
    else{
        throw new Exception ($conexion->error);
    }
} catch (Exception $e){
    echo $e->getMessage();
} finally{
    $conexion->close();
}