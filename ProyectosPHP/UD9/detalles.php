<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 09 | array$_GET</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 09 | array$_GET</h1>
        <h3>Tema: 2  | array$_GET</h3>
		<hr>
		<div class="resultado">
          <?php
	          $familia = $_GET["Familia"];
	          $producto = $_GET["Producto"];
	          switch ($producto) {
		          case "Cisne":
			          $imagen = "images/decoracion/Deco01.jpg";
			          $descripcion = "Figura de porcelana china que representa un Cisne. Ideal como sobremesa";
			          $pvp = 421.00;
			          break;
		          case "Ramo04":
			          $imagen = "images/flores/Flores04.jpg";
			          $descripcion = "Ramo de flores en tonos claros para decoración";
			          $pvp = 59.45;
			          break;
		          case "Hucha":
			          $imagen = "images/home/Home02.jpg";
			          $descripcion = "Para ahorrar...  que mejor que esta simpática hucha";
			          $pvp = 32.00;
			          break;
	          }
          ?>
          
          <p>Familia de productos: <?php echo "<b>$familia</b>"; ?></p>
          <p><img name="producto" src=<?php echo "\"$imagen\"";?> alt="Imagen"></p>
          <p>PVP: <?php echo "<b>$pvp</b>"; ?></p>
            <form name="form1" method="post" action="">
                <textarea name="descripcion" id="descripcion" cols="80" rows="10">
                    <?php echo "$descripcion"; ?>
                </textarea>
            </form>
   
		</div>
	
	</div>
</div>
</body>
</html>