<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 06 | Incluir Archivos</title>
	<link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/formulario.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 06 | Incluir Archivos</h1>
        <h3>Tema: 1  | Ambito de las variables</h3>
		<hr>
		<div class="resultado">
            <form action="procesar.php" method="post">
                
                <p><label for="Usuario" name="Usuario">Introduzca su nombre: </label>
                <input type="text" name="Usuario" placeholder="Su Nombre"></p>
                <p><label for="Email" name="Email">Introduzca su e-mail:</label>
                <input type="text" name="Email" placeholder="Su Correo"></p>
                <p><label for="Password" name="Password">Introduzca Contraseña: </label>
                <input type="password" name="Password" placeholder="Su contaseña"></p>
                <input type="submit" name="enviar" value="Enviar">
            </form>
			<?php
              
			?>
		</div>
	
	</div>
</div>
</body>
</html>