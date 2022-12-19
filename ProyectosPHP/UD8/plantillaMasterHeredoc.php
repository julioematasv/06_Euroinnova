
<?php
	// Inicio del Bloque heredoc
echo <<<EOT

<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>El Gran Libro PHP | Plantilla Heredoc</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>El Gran Libro PHP | Plantilla Heredoc</h1>
        <h3>Capitulo 3  | Mezclando PHP y HTML</h3>
		<hr>
		<div class="resultado">
		<?php
            
    ?>
		</div>
	
	</div>
</div>
</body>
</html>

EOT;
	// Finalizamos el bloque heredoc
	/* Si bien los caracteres identifcadores pueden formarse con cualquier combinación alfanumérica,
		 por convención, se suele utilizar los caracteres EOT (end of text o fnal de texto)  */

