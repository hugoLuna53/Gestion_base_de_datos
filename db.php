<?php
function conectarBD(){
    $conexion = mysqli_connect("localhost", "root", "", "base1");
    if(!$conexion){
        die("Error de conexión: " . mysqli_connect_error());
    }
    mysqli_set_charset($conexion, 'utf8');
    return $conexion;
}
?>
