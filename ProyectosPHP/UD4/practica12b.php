<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica 12b| Arrays</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica 12a | Arrays</h1>
		<hr>
		<div class="resultado">
			<?php
                echo "<h3>Practica 12b <i>Juego la Quiniela</i></h3>";
                echo "<br>";echo "<br>";
				// Declarando el array y la variable que sumara el resultado.
				$quiniela = array(
                    "Partido1" => array(true, true, false),
                    "Partido2" => array(true, false, false),
                    "Partido3" => array(false, true, false),
                    "Partido4" => array(false, true, false),
                    "Partido5" => array(true, false, false),
                    "Partido6" => array(true, false, true),
                    "Partido7" => array(false, false, true),
                    "Partido8" => array(true, true, false),
                    "Partido9" => array(false, true, true),
                    "Partido10" => array(true, true, true),
                    "Partido11" => array(true, false, true),
                    "Partido12" => array(false, false, true),
                    "Partido13" => array(true, false, false),
                    "Partido14" => array(true, false, false),
                    "Pleno15" => array(true, true, true)
                );
				
				echo "<p>Su Apuesta</p>";
				foreach ($quiniela as $clave => $valor) {
				    echo "$clave: ";
				    if($valor[0])
				        echo "<b> 1 </b>";
                    if($valor[1])
                        echo "<b> X </b>";
                    if($valor[2])
                        echo "<b> 2 </b>";
                    echo "<br>";
                }
				
			?>
		</div>
	
	</div>
</div>
</body>
</html>