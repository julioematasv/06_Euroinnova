<?php
  if (!empty($_POST["botAceptar"])) {
      $usuario = $_POST["nombre"];
      setcookie("Mensaje", "Hola $usuario", time() + (3600 * 24 * 30));
      setcookie("Color", $_POST['color'], time() + (3600 * 24 * 30));
  }
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario de personalizacion | Practica de Unidad 11</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h2>Practica de Unidad 11 | Cookies</h2>
        <h3>Formulario de personalizacion</h3>
		<hr>
		<div class="resultado">
        <?php
          if (!isset($_COOKIE["Mensaje"])){
        } ?>
            <form name="form1" method="post" action="">
                <div align="center">
                    <table width="43%" border="0" cellpadding="4">
                        <tr>
                            <td colspan="2">Indique los siguientes detalles:</td>
                        </tr>
                        <tr>
                            <td width="36%"><strong>Nombre</strong>:</td>
                            <td width="64%"><input name="nombre" type="text" id="nombre"></td>
                        </tr>
                        <tr>
                            <td><strong>Color del texto</strong>:</td>
                            <td><select name="color" id="color">
                                    <option value="#808080">Gris</option>
                                    <option value="#FFFF00">Amarillo</option>
                                    <option value="#008000">Verde</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div align="center">
                                    <input name="botAceptar" type="submit" id="botAceptar" value="Aceptar">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        
		</div>
	
	</div>
</div>
</body>
</html>