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
              $monedas = array(
                "España" => "Euro",
                "Francia" => "Euro",
                "Reino Unido" => "Libra Esterlina",
                "USA" => "Dolar",
                "Argentina" => "Peso",
                "Guatemala" => "Quetzal",
                "Honduras" => "Lempira"
              );
   
			?>
            
            <table class="a">
                <tr>
                    <th>Países</th>
                    <th>Moneda</th>
                </tr>
	            <?php
		            foreach ($monedas as $clave => $valor){
			            echo "<tr>";
			            echo "<td>&nbsp;$clave</td>";
			            echo "<td>&nbsp;$valor</td>";
			            echo "<tr>";
		            }
	
	            ?>
            </table>
						
						
            
		</div>
	
	</div>
</div>
</body>
</html>