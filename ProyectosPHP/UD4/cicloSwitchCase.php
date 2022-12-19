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
              echo "<h3>Estrucura de decisión <i>switch/case</i></h3>";
              echo "<br>";echo "<br>";
   
			$dia = 4;
			switch ($dia) {
			case 1:
			    $resultado = "El día de la semana: lunes";
			    break;
              case 2:
              $resultado = "El día de la semana: martes";
              break;
              case 3:
              $resultado = "El día de la semana: miercoles";
              break;
              case 4:
              $resultado = "El día de la semana: jueves";
              break;
              case 5:
              $resultado = "El día de la semana: viernes";
              break;
              case 6:
              $resultado = "El día de la semana: sabado";
              break;
              case 7:
              $resultado = "El día de la semana: domingo";
              break;
              default:
              $resultado = "No es un día de la semana";
            }
			echo "<p>estamos en <emphasis>$resultado</emphasis>.</p>";
			
			?>
		</div>
	
	</div>
</div>
</body>
</html>