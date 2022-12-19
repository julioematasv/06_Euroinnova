<?php ob_start(); # Inicio de Sesión: ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Practica de Unidad 11 | Cookies y Sesiones</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<?php
	# Inicio de Sesión:
    ob_clean();
	session_start();
?>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Practica de Unidad 11 | Cookies y Sesiones</h1>
        <h3>Tema: 7  | El array $_SESSION</h3>
		<hr>
		<div class="resultado">
          <?php
	      
          if (!$_POST){
          
          ?>
            <div id="content">
                <h3>Elija un producto y pulse en Enviar</h3>
                <div id="wrapper">
                    <form id="form1" name="form1" action="<?php echo$_SERVER['PHP_SELF']; ?>" method="post">
                        <fieldset class="step">
                            <legend>Productos</legend>
                            <select name="Productos" id="Productos" size="1">
                                <option value="Placa MMX-100">Placa MMX-100</option><br />
                                <option value="Placa MMX-200">Placa MMX-200</option><br />
                                <option value="Telefono ALSTER">Teléfono ALSTER</option><br />
                                <option value="Telefono MOVILON">Teléfono MOVILON</option><br />
                            </select>
                            <br>
                            <input type="submit" name="botEnviar" value="Enviar">
                        </fieldset>
                    </form>
                </div>
                <?php
	             } else {
                    switch ($_POST['Productos']) {
                      case 'Placa MMX-100':
	                    $_SESSION['Total'] = $_SESSION['Total'] + 700;
	                    break;
                    case 'Placa MMX-200':
                        $_SESSION['Total'] = $_SESSION['Total'] + 1400;
                        break;
                    case 'Telefono ALSTER':
                        $_SESSION['Total'] = $_SESSION['Total'] + 850;
                        break;
                    case 'Telefono MOVILON':
                        $_SESSION['Total'] = $_SESSION['Total'] + 623;
                        break;
                    }
                    echo "<p>Total a facturar: " . $_SESSION['Total'] . "</p>";
                    echo "<a href='" . $_SERVER["PHP_SELF"] . "'> Volver</a>";
                }
              ?>
		</div>
	
	</div>
</div>
</body>
</html>