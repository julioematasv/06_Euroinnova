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
				
				
				// Iniciando el Ciclo de Repetición.
				for ($i = 10; $i >= 0; $i = $i -= 2) {
                    echo " $i ";
				}
							
                echo "<br>";echo "<br>";
				
				$dia = 1;
				switch ($dia)
                {
                  case 1:
                      $resultado = "lunes";
                  case 2:
                      $resultado = "martes";
                  case 3:
                      $resultado = "miercoles";
                }
				echo $resultado;
			?>
		</div>
	
	</div>
</div>
</body>
</html>