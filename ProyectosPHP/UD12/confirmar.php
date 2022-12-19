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
        <h3>Tema: 0  | Tema de unidad</h3>
		<hr>
		<div class="resultado">
          <?php
	          if (isset($_GET["archivo"]))
	          {
		          $fd = fopen("usuarios/" . $_GET["archivo"], "r");
		          echo "<table>";
		          echo "<tr>";
		          while (!feof($fd))
		          {
			          $fline = fgets($fd);
			          $fline = htmlspecialchars($fline);
			          echo "<td>$fline</td></tr>";
		          }
		          echo "</table>";
		          fclose($fd);
	          }
          ?>
        </div>
	
	</div>
</div>
</body>
</html>