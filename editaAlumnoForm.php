<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario para editar un alumno</title>
</head>
<body>
<?php 

$conexion = mysqli_connect("localhost","root","","base1")or die("problemas en la conexion");

$consulta = mysqli_query($conexion,"Select * from alumnos where codigo = '$_GET[codigoAlumno]'");

    $registro = mysqli_fetch_array($consulta);
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





?>    
</body>
<form action="editaAlumno.php" method="post">
    Solo puedes modificar 2 campos:Correo y codigo del curso <br>
    Codigo alumno <input type="number" name="codigoAl" value="<?php echo $_GET['codigoAlumno'] ?>"><br>
    Edita el correo <input type="text" name="emailNuevo" value="<?php echo $registro['email'] ?>"><br>
    Edita el codigo de curso <input type="number" name="CodigoCurso" min="1" max = "3" value="<?php echo $registro['codigoCurso'] ?>"><br>
    <input type="submit" value="modificar alumno">  


</form>
</html>