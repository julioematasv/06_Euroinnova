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
                echo "<h3>Estrucuras de decisión <i>Combinando ciclos: for | if/else</i></h3>";
                echo "<br>";echo "<br>";
				// Declarando el array y la variable que sumara el resultado.
				$a = array(0, 2, 4, 1, 3, 15, 9, 17, 22, 8, 7, 6);
				$indice = 0;
				$valor = 8;
				$encontrado = false;
				
				// Iniciando el Ciclo de Repetición.
				for ($lugar = 0; $lugar <= 9; $lugar++) {
				    if($a[$lugar] === $valor){
				        $encontrado = true;
				        break;
                    }
				}
				if($encontrado){
                    echo "<p>El valor $valor esta en la lista</p>";
                } else {
                    echo "<p>El valor $valor no se encuentra en la lista</p>";
                }
				
			?>
		</div>
	
	</div>
</div>
</body>
</html>