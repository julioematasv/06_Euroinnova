<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 07 | Practica 15</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Programación Orientada a Objetos | Practica 15</h1>
        <h3>Tema: 7  | Programación Orientada a Objetos</h3>
		<hr>
		<div class="resultado">
			<?php
              include_once("ccorriente.inc.php");
              $c = new Ccorriente("000-000-001", "51265438-W", "13/08/2005", 0.0235);
              $c->abonar(785.46, "01/01/2006", "Abono en Ventanilla");
              $c->cargar(59.05, "15/02/2006", "Cuota Canal TV");
              echo "El saldo es de: " . $c->getSaldo();
              echo "<br>";
              echo "Cuenta corriente No.: " . $c->getNumCuenta();
              echo "<br>";
              echo "Número de ID: " . $c->getNifTitular();
              echo "<br>";
              echo "Fecha de alta: " . $c->getFechaAlta();
              $c->abonar(200.00, "01/01/2006", "Abono en Ventanilla");
              echo "<br>";
              echo "El saldo es de: " . $c->getSaldo();
              echo "<br>";
			?>
		</div>
	
	</div>
</div>
</body>
</html>