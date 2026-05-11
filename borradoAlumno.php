<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar alumno</title>
</head>

<body>
<?php

$conexion = mysqli_connect("localhost","root","","base1") or die("Problemas en la conexion");


$registro = mysqli_query($conexion,"delete from alumnos where codigo='$_GET[codigoAlumno]'")or die("Problemas con la consulta" . mysqli_error($conexion));
echo "alumno borrado correctamente";
mysqli_close($conexion);

?>
    
</body>
</html>