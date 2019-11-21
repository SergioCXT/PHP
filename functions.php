<?php
    // Funciones

    function mediaArray( $valores ){
        $valores = array (8, 19, 13, 3);
        $suma = 0;
    
        for ($i=0; $i < count($valores) ; $i++) { 
            $suma = $suma + $valores[$i];
        }
        //echo $suma;
        //echo "<br>";
        //echo round($suma / count($valores),1);

        return round($suma / count($valores),1);
    }
?>