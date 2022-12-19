
    <?php
        // función "burbuja", consiste en recorrer el array y, en cada pasada, comparar e intercambiar
        // (si procede) elementos del array.
        function burbuja(&$vector){
            $sizeArray = count($vector);
            for ($i = 1; $i < $sizeArray; $i++ ){
                for ($j = $sizeArray - 1; $j >= $i; $j--){
                    if ($vector[$j] < $vector[$j - 1]){
                        $aux = $vector[$j - 1];
                        $vector[$j - 1] = $vector[$j];
                        $vector[$j] = $aux;
                    }
                }
            }
        }
    ?>
