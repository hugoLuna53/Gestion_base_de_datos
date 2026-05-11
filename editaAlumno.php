<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita alumno</title>
</head>
<body>
<?php 
if($_POST['emailNuevo'] == ""){
    echo "email vacio por lo que no se actualizara";
}
else{

    $conexion = mysqli_connect("localhost","root","","base1")or die("problemas en la conexion");
    $consulta = mysqli_query($conexion,"update alumnos set email = '$_POST[emailNuevo]',codigoCurso = '$_POST[CodigoCurso]' where codigo = '$_POST[codigoAl]'");
   

}





?>    
</body>
</html>