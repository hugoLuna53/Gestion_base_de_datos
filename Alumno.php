<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de alumno</title>
</head>
<body>
    <?php

    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    mysqli_query($conexion, "insert into alumnos(nombre,email,codigocurso) values 
                        ('".$_POST['nombre']."','".$_POST['email1']."',".$_POST['codigoCurso'].")")
        or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El alumno fue dado de alta.";
    




?>
</body>
</html>