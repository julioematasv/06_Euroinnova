<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unidad 3 Tipos de Datos</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>Unidad 3 | Tipos de Datos</h1>
            <hr>
          <div class="resultado">
			<?php
              define("LABORABLES_SEMANA", 5);
			$variable = 5;
			$variable2 = 2.5;
			
			echo "<p>El valor de variable es $variable.</p>";
			echo "<p>La suma las dos variables es: " . ($variable +	LABORABLES_SEMANA) . "</p>"
			?>
          </div>
			
		</div>
	</div>
</body>
</html>