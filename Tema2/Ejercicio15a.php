<?php

// Realiza un procedimiento que reciba cinco números enteros como parámetros 
// y muestre por pantalla el resultado de sumar los cinco números.

function sumaArray($valores){
    $suma = 0;

    for ($i=0; $i < count($valores) ; $i++) { 
        $suma = $suma + $valores[$i];
    }
    echo $suma;
}

$suma = sumaArray( array (8, 19, 13, 3, 43) );

echo $suma;

?>