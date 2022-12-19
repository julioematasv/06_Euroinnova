<?php
	function saludo(){
		$hoy = localtime(time(),1);
		$hora = $hoy[date('Y-m-d')];
		if (($hora >= 7) && ($hora < 13)) {
			return "Buenos días";
			} else if (($hora >= 13) && ($hora < 20)){
			return "Buenas Tardes";
		} else{
			return "Buenas noches";
		}
	}
	?>

<!doctype html>
<html lang="es-es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mi Primera página PHP | Saludo</title>
</head>
<body>
	<p><?php echo saludo(); ?></p>
</body>
</html>
