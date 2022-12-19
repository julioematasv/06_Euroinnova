<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 05 | Practica 13</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 05 | Practica13</h1>
		<hr>
		<div class="resultado">
			<?php
              // función "burbuja", consiste en recorrer el array y, en cada pasada, comparar e intercambiar
              // (si procede) elementos del array.
              function burbuja(&$vector){
                  $sizeArray = count($vector);
                  for ($i = 1; $i < $sizeArray; $i++ ){
                      for ($j = $sizeArray - 1; $j >= $i; $j--){
                          if ($vector[$j] < $vector[$j - 1]){
                              $aux = $vector[$j - 1];
                              $vector[$j - 1] = $vector[$j];
                              $vector[$j] = $aux;
                          }
                      }
                  }
              }
			?>
            
            <?php
	            $a = array(2, 35, 27, 42, 18, 5, 51, 7, 63, 1);
	            echo "Contenido inicial del array: ";
	            for($i = 0; $i < count($a); $i++){
		            echo "$a[$i] , ";
	            }
	
	            burbuja($a);
	            echo "<br />";echo"<br>";
	            echo "Contenido ordenado del array: ";
	            echo "<b>";
	            for($i = 0; $i < count($a); $i++){
	            echo "$a[$i], ";
            }
	            echo "</b>";
            ?>
		</div>
	
	</div>
</div>
</body>
</html>