<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 03 | Tipos de Datos</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 04 | Estructuras de Repetición</h1>
		<hr>
		<div class="resultado">
			<?php
                echo "<h3>Estrucura de decisión <i>ciclo: for</i></h3>";
                echo "<br>";echo "<br>";
				// Declarando el array y la variable que sumara el resultado.
				$a = array(0, 1, 2, 3, 4);
				$suma = 0;
				
				// Iniciando el Ciclo de Repetición.
				for ($i = 0; $i < 5; $i++) {
                    echo "<p>En este momento i vale: " . $a[$i] . "</p>";
					$suma += $a[$i];
					
				}
				
				echo "<p>El valor de la suma es: $suma</p>";
				
			?>
		</div>
	
	</div>
</div>
</body>
</html>