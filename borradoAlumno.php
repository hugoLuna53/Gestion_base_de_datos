<?php
require 'db.php';
$conexion = conectarBD();
$codigo = (int)$_GET['codigoAlumno'];
$stmt = mysqli_prepare($conexion, "DELETE FROM alumnos WHERE codigo=?");
mysqli_stmt_bind_param($stmt, "i", $codigo);
mysqli_stmt_execute($stmt);
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><link rel="stylesheet" href="styles.css"><title>Eliminar alumno</title></head><body><div class="container"><h2 class="success">Alumno eliminado correctamente</h2><a href="formularioConsulta.php">Volver</a></div></body></html>
