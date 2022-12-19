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
</html>