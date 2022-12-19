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
          if (empty($_POST['email'])) {
              $primeravez = TRUE;
	          $_POST["username"] = "";
              $_POST["email"] = "";
	          $_POST["password"] = "";
          }
          ?>
            <div id="content">
                <h1>Formulario con HTML5 y jQuery</h1>
                <div id="wrapper">
                    <form id="formElem" name="formElem" action="validarRegistro.php" method="post">
                        <fieldset class="step">
                            <legend>Cuenta</legend>
                            <p>
                                <label for="username">Nombre de usuario: </label>
                                <input id="username" name="username" value="<?php echo htmlspecialchars($_POST['username']);
                                ?>"/>
                            </p>
                            <p>
                                <label for="email">Email: </label>
                                <input id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>"  type="email" placeholder="ejemplo@tudominio.com"
                                       AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="password">Contraseña: </label>
                                <input id="password" name="password"  type="password" AUTOCOMPLETE=OFF />
                            </p>
                            <br>
                            <input type="submit" value="Enviar">
                        </fieldset>
                    </form>
                </div>
            </div>
   
		</div>
	
	</div>
</div>
</body>
</html>