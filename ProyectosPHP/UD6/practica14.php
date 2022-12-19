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
        <h3>Tema: Practica 14  | Proteger archivos</h3>
		<hr>
		<div class="resultado">
			
            
            <?php
              include "burbuja.inc.php";
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