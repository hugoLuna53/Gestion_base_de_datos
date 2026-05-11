<?php require 'db.php'; $conexion = conectarBD(); $nombre = trim($_POST['nombre']); ?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><link rel="stylesheet" href="styles.css"><title>Resultados</title></head><body><div class="container"><h1>Resultados</h1>
<?php
$stmt = mysqli_prepare($conexion, "SELECT codigo,nombre,codigoCurso,email FROM alumnos WHERE nombre LIKE ?");
$busqueda = "%$nombre%";
mysqli_stmt_bind_param($stmt, "s", $busqueda);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($resultado) === 0){
    echo "<p class='error'>No se encontraron alumnos.</p>";
}
while($registro = mysqli_fetch_assoc($resultado)){
    echo "<div class='card'>";
    echo "<strong>Código:</strong> {$registro['codigo']}<br>";
    echo "<strong>Nombre:</strong> {$registro['nombre']}<br>";
    echo "<strong>Email:</strong> {$registro['email']}<br>";
    echo "<strong>Curso:</strong> {$registro['codigoCurso']}<br><br>";
    echo "<a href='borradoAlumno.php?codigoAlumno={$registro['codigo']}'>Eliminar</a> | ";
    echo "<a href='editaAlumnoForm.php?codigoAlumno={$registro['codigo']}'>Editar</a>";
    echo "</div>";
}
mysqli_close($conexion);
?>
</div></body></html>
