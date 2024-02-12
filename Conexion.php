<?php
$servidor = 'localhost:3306';
$usuario = 'root';
$contrasena = '';
$bd = 'test';


try {
    $conexion=new mysqli($servidor,$usuario,$contrasena,$bd);
    
}catch (Exception $e){
    die ($e -> getMessage());
}