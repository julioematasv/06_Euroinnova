<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Calcular Nominas</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Herencia| Unidad 08</h1>
        <h3>Tema: 1  | Introducción</h3>
		<hr>
		<div class="resultado">
			<?php
              include_once("Empleado.inc.php");
              include_once("Vendedor.inc.php");
              
              $juan = new Empleado("Juan Rodriguez", 18000, "21/07/2005");
              $ana = new Vendedor("Ana Blanco", 18000, "21/07/2005", 15);
              
              $sueldo = $juan->calcularSalario();
              echo "<p>el salario de Juan Rodriguez es de: $sueldo.</p>";
              
              $ana->vender(100);
              $sueldo = $ana->calcularSalario();
              echo "<p>el salario de Ana Blanco es de: $sueldo.</p>";
              
			?>
		</div>
	
	</div>
</div>
</body>
</html>