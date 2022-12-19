<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 06 | Incluir Archivos</title>
	<link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/formulario.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 06 | Incluir Archivos</h1>
        <h3>Tema: 3  | Uso de include y require</h3>
		<hr>
		<div class="resultado">
			<?php
            
            include("validator.inc.php");
            
            $usuario = $_POST["Usuario"];
            $password = $_POST["Password"];
            $email = $_POST["Email"];
            
            if (ValidarEmail() && ValidarPassword())
              echo "<h2 class='bien'>Formato correcto</h2>";
            else
              echo "<h2 class='error'>Formato Incorrecto</h2>"
              
              
			?>
		</div>
	
	</div>
</div>
</body>
</html>