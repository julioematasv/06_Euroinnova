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
			<?php
            
            $usuario = $_POST["Usuario"];
            $password = $_POST["Password"];
            $email = $_POST["Email"];
              
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
              
              if (ValidarEmail() && ValidarPassword())
                  echo "<h2 class='bien'>Formato correcto</h2>";
              else
                  echo "<h2 class='error'>Formato Incorrecto</h2>"
              
              
			?>
		</div>
	
	</div>
</div>
</body>
</html>