<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SitePoint Cap. 9 | Learn PHP in 1 day</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>SitePoint Cap. 9 | Learn PHP in 1 day</h1>
        <h3>Tema: 9  | 9.3 Creating Object</h3>
		<hr>
		<div class="resultado">
		<?php
        include 'Movie.php';
        $mov1 = new Movie('N0001', 'Lusso', 4.99);
        $mov2 = new Movie('N0002', 'Junior', 5.99);
        
        echo $mov1->title . '<br>';
        echo $mov1->conversion('Japan') . '<br>';
        
        echo Movie::DISCOUNT . '<br>';
        echo $mov1::DISCOUNT . '<br>';
        echo $mov2::DISCOUNT . '<br>';
        
        ?>
		</div>
	
	</div>
</div>
</body>
</html>