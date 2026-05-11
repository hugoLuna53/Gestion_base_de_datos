<?php
require 'db.php';
$conexion = conectarBD();
$nombre = trim($_POST['nombre']);
$email = trim($_POST['email1']);
$curso = (int)$_POST['codigoCurso'];
?>
<!DOCTYPE html><html lang="es">
    <head><meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css"><title>Alta completada</title>
</head><body>
    
<div class="container">
<?php
if(empty($nombre) || empty($email)){
    echo "<p class='error'>Todos los campos son obligatorios.</p>";
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<p class='error'>El email no es válido.</p>";
} else {
    $stmt = mysqli_prepare($conexion, "INSERT INTO alumnos(nombre,email,codigocurso) VALUES (?,?,?)");
    mysqli_stmt_bind_param($stmt, "ssi", $nombre, $email, $curso);
    mysqli_stmt_execute($stmt);
    echo "<h2 class='success'>Alumno registrado correctamente</h2>";
}
mysqli_close($conexion);
?>
<a href="formulario.php">Volver</a>
</div></body></html>
