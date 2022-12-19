<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica 12a| Arrays</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica 12a | Arrays</h1>
		<hr>
		<div class="resultado">
			<?php
                echo "<h3>Practica 12a2 <i>Cambiar ciclo while por do while</i></h3>";
                echo "<br>";echo "<br>";
				// Declarando el array y la variable que sumara el resultado.
				$numeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
				for ($i = 0; $i <= 9; $i++){
				    switch ($i){
                      case 0:
                          $factorial[$i] = 1;
                          break;
                      case 1:
                          $factorial[$i] = 1;
                      default:
                          $factorial[$i] = 1;
                          for($j = 1; $j <= $i; $j++){
                              $factorial[$i] = $factorial[$i] * $j;
                          }
                    }
            }
				for($i = 0; $i <= 9; $i++){
				    echo $factorial[$i];
				    echo "<br>";
                }
				
			?>
		</div>
	
	</div>
</div>
</body>
</html>