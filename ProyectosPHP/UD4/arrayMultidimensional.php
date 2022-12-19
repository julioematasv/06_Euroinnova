<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 04 | Array Multidimensional</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 04 | 7. Arrays Multidimensionales</h1>
		<hr>
		<div class="resultado">
			<?php
              $productos = array(
                  array("Identificador" => 1, "Nombre" =>'Figura Cisne', "Precio" => 450.00),
	              array("Identificador" => 2, "Nombre" =>'Despertador', "Precio" => 79.78),
	              array("Identificador" => 3, "Nombre" =>'Reloj de Pared', "Precio" => 625.55),
              );
   
			?>
            
            <table class="a">
                <tr>
                    <th>Id product</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                </tr>
                <tr>
                    <td><?php echo $productos[0]["Identificador"]; ?></td>
                    <td><?php echo $productos[0]["Nombre"]; ?></td>
                    <td><?php echo $productos[0]["Precio"]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $productos[1]["Identificador"]; ?></td>
                    <td><?php echo $productos[1]["Nombre"]; ?></td>
                    <td><?php echo $productos[1]["Precio"]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $productos[2]["Identificador"]; ?></td>
                    <td><?php echo $productos[2]["Nombre"]; ?></td>
                    <td><?php echo $productos[2]["Precio"]; ?></td>
                </tr>
            </table>
						
						
            
		</div>
	
	</div>
</div>
</body>
</html>