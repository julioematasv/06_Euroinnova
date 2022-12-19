<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica 12a2 | Arrays</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica 12a2 | Arrays</h1>
		<hr>
		<div class="resultado">
			<?php
                echo "<h3>Practica 12a2 <i>Cambiar ciclo while por do while</i></h3>";
                echo "<br>";echo "<br>";
				// Declarando el array y la variable que sumara el resultado.
				$a = array(8, 786, 45, 4, 63, 89, 1478, 98);
				$i = 0;
				$buscado = 78;
				$encontrado = false;
				
				// Iniciando el Ciclo de Repetición.
              do {
                    if($a[$i] === $buscado){
                    $encontrado = true;
                   }
                    $i++;
              }	while ((!$encontrado) && ($i <=7));
              
				if($encontrado){
                    echo "<p>El valor $buscado esta en la lista</p>";
                } else {
                    echo "<p>El valor $buscado no se encuentra en la lista</p>";
                }
				
			?>
		</div>
	
	</div>
</div>
</body>
</html>