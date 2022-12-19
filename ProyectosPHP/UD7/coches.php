<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 07 | Programación Orientada a Objetos</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Programación Orientada a Objetos | Practica de Unidad 07</h1>
        <h3>Tema: 4  | Métodos (Incluye Clases)</h3>
		<hr>
		<div class="resultado">
			<?php
              include_once ("coche.inc.php");
              $c = new Coche("rojo", 0, 0);
              
              echo "El coche es de color " . $c->getColor();
              $c->mover(25,98);
              echo "<p>Ahora su posición es: </p>" . $c->getPosx() . " , "  . $c->getPosy() ;
			?>
		</div>
	
	</div>
</div>
</body>
</html>