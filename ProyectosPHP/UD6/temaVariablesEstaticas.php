<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 06 | Incluir Archivos</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 06 | Incluir Archivos</h1>
        <h3>Tema: 2  | Variables Estáticas</h3>
		<hr>
		<div class="resultado">
			<?php
              
              echo "<h4>Primer ejemplo con variable local dentro de la función</h4>";
              echo "<br>";
              function contar(){
                  $cuenta = 1;
                  if($cuenta == 1)
                      echo "<p>Esta es la primera vez</p>";
                  else
                      echo "<p>Esta es la vez numero: $cuenta.</p>";
                  $cuenta++;
              }
              for ($i = 1; $i <= 5; $i++){
                  echo contar();
              }
                echo "<br>";
                echo "<h4>Segundo ejemplo con variable local declarada como 'static'.</h4>";
                echo "<br>";
                function contar2(){
                    static $cuenta = 1;
                    if($cuenta == 1)
                        echo "<p>Esta es la primera vez</p>";
                    else
                        echo "<p>Esta es la vez numero: $cuenta.</p>";
                    $cuenta++;
                }
                for ($i = 1; $i <= 5; $i++){
                    echo contar2();
                }
			?>
		</div>
	
	</div>
</div>
</body>
</html>