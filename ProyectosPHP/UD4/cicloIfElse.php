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
            echo "<h3>Estrucura de decisión <i>if / else</i></h3>";
            echo "<br>";echo "<br>";
   
			$dia = 5;
			
			if($dia === 1)
			    $resultado = "El día de la semana: lunes";
			elseif($dia === 2)
              $resultado = "El día de la semana: martes";
			elseif($dia === 3)
              $resultado = "El día de la semana: miercoles";
			elseif($dia === 4)
              $resultado = "El día de la semana: jueves";
			elseif($dia === 5)
              $resultado = "El día de la semana: viernes";
			elseif($dia === 6)
              $resultado = "El día de la semana: sabado";
			elseif($dia === 7)
              $resultado = "El día de la semana: domingo";
			else
              $resultado = "No es un día de la semana";
			
			echo "<p>estamos en <emphasis>$resultado</emphasis>.</p>";
			
			?>
		</div>
	
	</div>
</div>
</body>
</html>