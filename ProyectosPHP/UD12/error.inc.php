
<?php

    function error_personalizado($tipo, $mensaje, $archivo, $linea){
        echo "<p class='error'>Ha Ocurrido un error.</p> ";
        echo "<p class='error'>Por favor, intentelo más tarde.</p> ";
        echo "<p class='error'>Tipo error: $tipo.</p> ";
        echo "<p class='error'>Mensaje error: $mensaje.</p> ";
        echo "<p class='error'>En la línea: $linea del archivo: $archivo. del tipo: $tipo</p> ";
    }

    set_error_handler("error_personalizado");