<?php
define('CSSPATH', '../css/');
$cssItem = 'estilos.css';
?>
    <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css">
<?php
function entero($entero){
    if (!intval($entero)){
        throw new Exception('No es un número entero');
    }
    echo "<div class='mensajePequeño'>";
    echo "<h2 class='correcto'>" . $entero . "</h2>";
    echo "</div>";
}

try {
    echo entero(5); #aquí le mando el error
} catch (Exception $e) {
    echo "<div class='mensajePequeño'>";
    echo "<h2 class='error'>Ha Ocurrido un Error</h2>";
    echo "<h3 class='error'>Por Favor Intentalo más tarde</h3>";
    echo 'Exepción capturada: ' . $e->getMessage(); #si hay error lo captura y envia el mensaje
    echo "</div>";
}

# Otro ejemplo:
    function division($n1, $n2){
    if (!$n2){
        throw new Exception('División por cero');
    }
        echo "<div class='mensajePequeño'>";
        echo "<h2 class='correcto'>" . $n1 / $n2 . "</h2>";
        echo "</div>";
    }

try {
    echo division(12, 2);
} catch (Exception $e){
    echo "<div class='mensajePequeño'>";
    echo "<h2 class='error'>Ha Ocurrido un Error</h2>";
    echo "<h3 class='error'>Por Favor Intentalo más tarde</h3>";
    echo 'Exepción capturada: ' . $e->getMessage(); #si hay error lo captura y envia el mensaje
    echo "</div>";
}

# Otra forma de hacer una division y capturar el error:
    function dividir($n1, $n2){
    if ($n2 === 0){
        throw new Exception('No se puede dividir ' . $n1 . ' entre ' . $n2);
        } else {
            return $n1 / $n2;
        }
    }

try {
    echo "<div class='mensajePequeño'>";
    echo "<h2 class='correcto'>" . dividir(5,2) . "</h2>" ."<br>";
    echo "<h2 class='correcto'>" . dividir(7, 0) . "</h2>" ."<br>";
    echo "</div>";
} catch (Exception $e){
    echo "<div class='mensajePequeño'>";
    echo "<h2 class='error'>Ha Ocurrido un Error</h2>";
    echo "<h3 class='error'>Por Favor Intentalo más tarde</h3>";
    echo 'Exepción ocurrida: ' . $e->getMessage() . "<br>"; #si hay error lo captura y envia el mensaje
    echo "</div>";
}