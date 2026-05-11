<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de alumnos</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<h1>Alta de alumnos</h1>
<form action="Alumno.php" method="post">
<label>Nombre</label>
<input type="text" name="nombre" required>
<label>Email</label>
<input type="email" name="email1" required>
<label>Curso</label>
<select name="codigoCurso">
<option value="1">PHP</option>
<option value="2">ASP</option>
<option value="3">JSP</option>
</select>
<input type="submit" value="Dar de alta">
</form>
</div>
</body>
</html>
