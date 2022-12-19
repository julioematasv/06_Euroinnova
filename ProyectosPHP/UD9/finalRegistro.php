<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Página de Confirmación</title>
</head>
	<body>
		<h1>Página de Confirmación</h1>
		<p>Nombre: <?php echo $_POST["nombre"]; ?></p>
		<p>Apellidos: <?php echo $_POST["apellidos"]; ?></p>
		<p>Fecha de Nacimiento: <?php echo $_POST["fechanacimiento"]; ?></p>
		<p>Dirección: <?php echo $_POST["direccion"]; ?></p>
		<p>Población: <?php echo $_POST["poblacion"]; ?></p>
		<p>Provincia: <?php echo $_POST["provincia"]; ?></p>
		<p>Código Postal: <?php echo $_POST["codpostal"]; ?></p>
		<p>Email: <?php echo $_POST["email"]; ?></p>
		<p>Teléfono: <?php echo $_POST["telefono"]; ?></p>
	</body>
</html>
