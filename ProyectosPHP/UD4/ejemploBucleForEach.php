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
                echo "<h3>Estrucura de decisión <i>ciclo: for Each</i></h3>";
                echo "<br>";echo "<br>";
				
				// Recorriendo una tabla o array con el bucle foreach.
              //Este bucle es muy práctico porque no tiene que estar pendiente del tamaño de la tabla.
              // El bucle foreach no usa un contador.
              // Almacena de uno en uno los valores de la tabla en una variable temporal, que en el siguiente ejemplo es $val.
              // Puede dar a esta variable el nombre que quiera y no necesita definirla.
              
              // Creando la tabla de nombres:
                $tabla = array("Juan","Roberto","Pablo","Pedro","Alonso", "Julio", "Carlos");
                
                // Recorriendo la tabla con el bucle for each:
              foreach ($tabla as $val) {
                  
                  // bloque de instrucciones mientras dure el bucle:
                echo "<p>$val</p>";
                echo "<br>";
              }
              
			?>
		</div>
	
	</div>
</div>
</body>
</html>