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
            <h1>Practica de Unidad 03 | Tipos de Datos</h1>
            <hr>
            <div class="resultado">
                <?php
                $entero = 0;
                $decimal = 0.5;
                $cadena = "hola";
                $cadena2 = "0256";
                $nulo = null;
                
                echo('<p>La conversión a boolean dela variable $entero es: ' . (boolean)$entero . '</p>');
                echo("<br>");
                echo('<p>La conversión a boolean dela variable $decimal: ' . (boolean)$decimal . "</p>");
                echo("<br>");
                echo('<p>La conversión a boolean dela variable $cadena es: ' . (boolean)$cadena . "</p>");
                echo("<br>");
                echo('<p>La conversión a boolean dela variable $cadena2 es: ' . (boolean)$cadena2 . "</p>");
                echo("<br>");
                echo('<p>La conversión a boolean dela variable $nulo es: ' . (boolean)$nulo . "</p>");
                
                
                ?>
            </div>
        
        </div>
    </div>
</body>
</html>