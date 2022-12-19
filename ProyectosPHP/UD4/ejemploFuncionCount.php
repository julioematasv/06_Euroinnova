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
                echo "<h3>Estrucura de decisión <i> Función count() ó sizeof()</i></h3>";
                echo "<br>";echo "<br>";
              
              // Creando la tabla de nombres:
                $tabla = array("ID-01" => "Juan", "ID-02" => "Roberto", "ID-03" => "Pablo", "ID-04" => "Pedro", "ID-05" => "Alonso");
             // La  función count()   o sizeof()   permiten  conocer  el  número  de  elementos  de  una  tab la,  por ejemplo:
              $thisSize = count($tabla);
            echo "<p>El tamaño de la tabla es de:  $thisSize  Elementos</p>";
              
			?>
		</div>
	
	</div>
</div>
</body>
</html>