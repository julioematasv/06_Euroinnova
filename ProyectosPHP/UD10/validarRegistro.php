<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 10 | Validación de Formularios</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 10 | Validación de Formularios</h1>
        <h3>Tema: 1  | Validar con Expresiones Regulares</h3>
		<hr>
		<div class="resultado">
          <?php
	          $primeravez = FALSE;
	          if (!$primeravez){
                  if (empty($_POST['username'])){
	                  echo "<h1 class='error'>¡Tiene que introducir su Nombre de Usuario!</h1></p>";
                  }
		          elseif (empty($_POST["email"])){
			          echo "<h1 class='error'>¡Tiene que introducir su email!</h1></p>";
		          }
                  elseif(!preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $_POST["email"])){
	                  echo "<h1 class='error'>¡Su email no es Válido!</h1></p>";
                  }
                  elseif(empty($_POST["password"])){
	                  echo "<h1 class='error'>¡Tiene que introducir su Contraseña!</h1></p>";
                  }
                  elseif(!preg_match('/^[a-zA-Z0-9]{6,10}$/', $_POST["password"])){
	                  echo "<h1 class='error'>¡La Contraseña Tiene que Tener Como Mínimo Entre 6 y 10 Caracteres!</h1></p>";
                  }
                  else {
	                  echo "<h1 class='correcto'>¡Todo esta correcto!</h1></p>";
                  }
                  
	          }
          ?>
		</div>
	
	</div>
</div>
</body>
</html>