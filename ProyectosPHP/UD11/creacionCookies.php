<?php
if (empty($_COOKIE["veces"])){
    setcookie("veces", 1, time() + (3600*24*7));
}else {
		setcookie("veces", $_COOKIE["veces"] + 1);
		$Fecha_anterior = $_COOKIE["Momento"] ["Fecha"];
		$Hora_anterior = $_COOKIE["Momento"] ["Hora"];
	}
$fecha = getdate(time());
$dia = $fecha["mday"] . "/" . $fecha["mon"] . "/" . $fecha["year"];
$hora = $fecha["hours"] . ":" . $fecha["minutes"] . ":" . $fecha["seconds"];
setcookie("Momento[Fecha]", $dia);
setcookie("Momento[Hora]", $hora);


?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 11 | Cookies y Sesiones</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 11 | Cookies y Sesiones</h1>
        <h3>Tema: 0  | Tema de unidad</h3>
		<hr>
		<div class="resultado">
          <?php
	          if (isset($Fecha_anterior)){
		          echo "Usted visito esta página por última vez el
    <strong>$Fecha_anterior</strong> a las
    <strong>$Hora_anterior</strong>";
		          echo "<br /><strong>Ha visitado esta página un total de: </strong>" . $_COOKIE["veces"] . "<strong> veces</strong>";
	          } else {
		          echo "Bienvenido a nuestra página web.";
	          }
          ?>
		</div>
	
	</div>
</div>
</body>
</html>