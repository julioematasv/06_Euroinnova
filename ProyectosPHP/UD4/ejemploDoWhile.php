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
                echo "<h3>Estrucura de decisión <i>ciclo: Do While</i></h3>";
                echo "<br>";echo "<br>";
				
				// La variable $i  representa  el  contador  del  bucle.  Pero  esta  vez  de be  leer:
                //  ejecutar  el  bucle  si $i   es inferior a 10.
				// Iniciando el Ciclo de Repetición.
    
				$i = 0; // declarando e inicialzando la variable.
				do {
				    ++$i;  // Incremento de la variable
                  
                    // Desde aquí comienzan las instrucciones que debe realiar
				    echo "<p> El valor de la variable Es de: $i <p/>";
				    echo "<br>";
                } while ($i < 10)  // condicional para finalizar el bucle.
			?>
		</div>
	
	</div>
</div>
</body>
</html>