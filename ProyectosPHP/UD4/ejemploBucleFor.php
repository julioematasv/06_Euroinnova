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
				
				// Recorriendo una tabla o array con el bucle for.
              
              // Creando la tabla de nombres:
                $tabla = array("Juan","Roberto","Pablo","Pedro","Alonso", "Julio");
                
                // Recorriendo la tabla con el bucle for:
              // Usar sizeof(), Esta función es un alias de: count().
              for ($i = 0; $i < sizeof($tabla); $i++) {
                  
                  // bloque de instrucciones mientras dure el bucle:
                echo "<p>$tabla[$i]</p>";
                echo "<br>";
              }
              // Es más efectiva la declaración de la siguiente manera:
              // for ($i = 0, $iMax = count($tabla); $i < $iMax; $i++)
              
			?>
		</div>
	
	</div>
</div>
</body>
</html>