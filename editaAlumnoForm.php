<?php
require 'db.php';
$conexion = conectarBD();
$codigo = (int)$_GET['codigoAlumno'];
$stmt = mysqli_prepare($conexion, "SELECT * FROM alumnos WHERE codigo=?");
mysqli_stmt_bind_param($stmt, "i", $codigo);
mysqli_stmt_execute($stmt);
$registro = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><link rel="stylesheet" href="styles.css"><title>Editar alumno</title></head><body><div class="container">
<h1>Editar alumno</h1>
<form action="editaAlumno.php" method="post">
<input type="hidden" name="codigoAl" value="<?php echo $registro['codigo']; ?>">
<label>Email</label>
<input type="email" name="emailNuevo" value="<?php echo $registro['email']; ?>" required>
<label>Curso</label>
<select name="CodigoCurso">
<option value="1">PHP</option>
<option value="2">ASP</option>
<option value="3">JSP</option>
</select>
<input type="submit" value="Guardar cambios">
</form>
</div></body></html>
