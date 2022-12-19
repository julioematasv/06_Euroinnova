<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Unidad Didactica 12 | Acceso a Archivos</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Unidad Didactica 12 | Acceso a Archivos</h1>
        <h3>Tema: 1  | Tema: Introducción</h3>
		<hr>
		<div class="resultado">
          <?php
	      $fd = fopen("usuarios/results.txt", "a+");
          
          foreach ($_POST as $valor){
              $contenido .= $valor . ";;";
          }
          $contenido .= "\n";
          fwrite($fd, $contenido);
          
          rewind($fd);
          while (!feof($fd)){
              $fline = fgets($fd);
              $fline = htmlspecialchars($fline);
              echo "<p>$fline</p>";
          }
          fclose($fd);
          
          echo "<h2 class='correcto'>Gracias Por Registarse</h2>";
          ?>
            <h2>Registro</h2>
            <br><hr><br>
            <form action="indexDatos.php" method="post">
                <label for="nombre">Nombre: </label><br>
                <input type="text" name="nombre" id="nombre"><br><br>
                <label for="contrasena">Contraseña: </label><br>
                <input type="password" name="contrasena" id="contrasena"><br><br>
                <label for="repetir_contrasena">Repite la Contraseña: </label><br>
                <input type="password" name="repetir_contrasena" id="repetir_contrasena"><br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </div>
	
	</div>
</div>
</body>
</html>