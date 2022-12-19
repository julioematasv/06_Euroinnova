<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 08 | Herencia</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Herencia| Unidad 08</h1>
        <h3>Tema: 1  | Introducción</h3>
		<hr>
		<div class="resultado">
          <?php
	      switch ($_GET["producto"]) {
            case 1:
                $imagen = "images/decoracion/Deco01.jpg";
                break;
          case 2:
              $imagen = "images/decoracion/Deco02.jpg";
              break;
          case 3:
              $imagen = "images/decoracion/Deco03.jpg";
              break;
          case 4:
              $imagen = "images/decoracion/Deco04.jpg";
              break;
          case 5:
              $imagen = "images/flores/Flores01.jpg";
              break;
          case 6:
              $imagen = "images/flores/Flores02.jpg";
              break;
          case 7:
              $imagen = "images/flores/Flores03.jpg";
              break;
          case 8:
              $imagen = "images/flores/Flores04.jpg";
              break;
              default:
                  $imagen = "images/Nodisponible.gif";
}
          ?>
            <div align="center">
                <table width="82%" border="0" cellpadding="4">
                    <tr>
                        <td width="25%"><font color="#FFFFFF" size="2">DECORACI&Oacute;N</font></td>
                        <td width="50%" rowspan="5"><div align="center"><?php echo "<img src= $imagen";?>></div></td>
                        <td width="25%"><font color="#FFFFFF" size="2">FLORES</font></td>
                    </tr>
                    <tr>
                        <td><a href="practica17a.php?producto=1">Fig. de cisne</a></td>
                        <td><a href="practica17a.php?producto=5">Ramo flores 1</a></td>
                    </tr>
                    <tr>
                        <td><a href="practica17a.php?producto=2">Despertador</a></td>
                        <td><a href="practica17a.php?producto=6">Ramo flores 2</a></td>
                    </tr>
                    <tr>
                        <td><a href="practica17a.php?producto=3">Reloj de pared</a></td>
                        <td><a href="practica17a.php?producto=7">Ramo flores 3</a></td>
                    </tr>
                    <tr>
                        <td><a href="practica17a.php?producto=4">L&aacute;mpara de pie</a></td>
                        <td><a href="practica17a.php?producto=8">Ramo flores 4</a></td>
                    </tr>
                </table>
            </div>
   
		</div>
	
	</div>
</div>
</body>
</html>