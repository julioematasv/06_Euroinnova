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
function ValidarEmail(){
    global $email;
    if(strpos($email, "@") === false)
        return false;
    else
        return true;
}


function ValidarPassword(){
    global $password;
    if(strlen($password) < 6 )
        return false;
    else
        return true;
}
?>
</body>
</html>