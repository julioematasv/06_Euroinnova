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
                echo "<h3>Estrucura de decisión <i>ciclo: while</i></h3>";
                echo "<br>";echo "<br>";
				
				// Declarando el array y la variable que sumara el resultado.
				$a = array(0, 1, 2, 3, 4);
				$suma2 = 0;
				$i = 0;
				
				// Iniciando el Ciclo de Repetición.
				while ($i < 5) {
                    echo "<p>En este momento i vale: " . $a[$i] . "</p>";
					$suma2 += $a[$i];
					$i++;
				}
				
				echo "<p>El valor de la suma es: $suma2</p>";
				
			?>
		</div>
	
	</div>
</div>
</body>
</html>