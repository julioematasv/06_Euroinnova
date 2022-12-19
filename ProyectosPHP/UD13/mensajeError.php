
<?php
define('CSSPATH', '../css/');
$cssItem = 'estilos.css';
?>
<link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css">
<?php
function mensaje_error($tipo, $mensaje, $archivo, $linea){
    echo "<div class='mensajePequeño'>";
    echo "<h3 class='error'>Ha Ocurrido un Error</h3>";
    echo "<p class='error'>Por Favor Intentalo más tarde</p>";
    echo "<p>Tipo Error: $tipo</p>";
    echo "<p>Mensaje Error: $mensaje</p>";
    echo "<p>En la línea: $linea del archivo: $archivo</p>";
    echo "</div>";
    $fecha = getdate(time());
    $dia = $fecha["mday"] . "/" . $fecha["mon"] . "/" . $fecha["year"];
    $hora = $fecha["hours"] . ":" . $fecha["minutes"] . ":" . $fecha["seconds"];
    $message = "[$dia $hora]::$archivo::$linea::$mensaje\n";

    error_log($message, 3, "C:/MAMP/logs/phperror.log");
}

