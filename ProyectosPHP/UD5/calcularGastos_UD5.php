<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 05 | Funciones</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 05 | Funciones</h1>
		<hr>
		<div class="resultado">
			<?php
              function gastos($categorias, $unidades, &$importe) {
                  switch ($categorias){
                      case 1:
                          $recargo = 1.85;
                          break;
                      case 2:
	                      $recargo = 3.05;
	                      break;
	                  case 3:
		                  $recargo = 6.50;
		                  break;
                    default:
                        $recargo = 0;
                  }
                  $importe = ($recargo + ($unidades * 2.25));
              }
              
              gastos(4, 1, $importe);
              echo "<p>El resultado es de: € $importe Euros</p>";
              echo "<br/>";echo "<br/>";echo "<br/>";
			?>
						
            <?php
              // Parametros por defecto.
              /* Para crear un parámetro opcional  debemos escribir
              su nombre y seguidamente un igual más el valor que tomará
              por defecto. Además, los parámetros de este tipo tienen que
              aparecer después de todos los parámetros de la función que no sean opcionales  */
                function gastos2($categorias, $unidades, &$importe, $urgente = false) {
                    switch ($categorias){
                        case 1:
                            $recargo = 1.85;
                            break;
                        case 2:
                            $recargo = 3.05;
                            break;
                        case 3:
                            $recargo = 6.50;
                            break;
                        default:
                            $recargo = 0;
                    }
                    if ($urgente)
                        $recargo = $recargo + 50.00;
                    $importe = ($recargo + ($unidades * 2.25));
                }
                
                gastos2(4, 1, $importe, true);// dado el parametro true.
                echo "<p>El resultado es de: € $importe Euros</p>";
            ?>
		</div>
	
	</div>
</div>
</body>
</html>