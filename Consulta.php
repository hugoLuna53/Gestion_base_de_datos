<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta por email</title>
</head>
<body>
    <?php

    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

   $consulta = mysqli_query($conexion, "select codigo,nombre,codigoCurso,email
                        from alumnos where nombre = '$_POST[nombre]' ") or
    die("Problemas en el select:" . mysqli_error($conexion));

    $codigo = 0;
    while($registro = mysqli_fetch_array($consulta)){
    echo "Codigo: ".$registro['codigo']."<br>";
      $codigo= $registro['codigo'];
    echo "Nombre:" . $registro['nombre'] . "<br>";
    echo "Email: ".$registro['email']."<br>";
    echo "Curso:";
    switch ($registro['codigoCurso']) {
      case 1:
        echo "PHP";
        break;
      case 2:
        echo "ASP";
        break;
      case 3:
        echo "JSP";
        break;
    }
    echo "<br>";
    echo "-------------";
    echo "<br>";
    echo "<a href= 'borradoAlumno.php?codigoAlumno=$codigo'>Borrar alumno</a>";"<br>";
    echo "<br>";
    echo "<a href='editaAlumnoForm.php?codigoAlumno=$codigo'>Editar alumno</a>";"<br>";
    echo "<br>";
    
  } 
  

  
  mysqli_close($conexion);





?>
    
</body>
</html>