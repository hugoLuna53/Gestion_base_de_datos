<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de consulta</title>
</head>
<form action="Consulta.php" method="post">
    Ingrese una letra para ver si la contiene algun alumno:
    <input type="text" name="nombre" pattern = "[A-Za-z]+">
    <br>
    <input type="submit" value="buscar">
</form>
<body>
    
</body>
</html>