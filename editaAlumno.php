<?php
require 'db.php';
$conexion = conectarBD();
$codigo = (int)$_POST['codigoAl'];
$email = trim($_POST['emailNuevo']);
$curso = (int)$_POST['CodigoCurso'];
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><link rel="stylesheet" href="styles.css"><title>Actualizar alumno</title></head><body><div class="container">
<?php
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<p class='error'>Correo inválido.</p>";
} else {
    $stmt = mysqli_prepare($conexion, "UPDATE alumnos SET email=?, codigoCurso=? WHERE codigo=?");
    mysqli_stmt_bind_param($stmt, "sii", $email, $curso, $codigo);
    mysqli_stmt_execute($stmt);
    echo "<h2 class='success'>Alumno actualizado correctamente</h2>";
}
mysqli_close($conexion);
?>
<a href="formularioConsulta.php">Volver</a>
</div></body></html>
