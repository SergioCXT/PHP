<?php

/*
Implementa una función que reciba cinco números enteros como parámetros y 
devuelva el resultado de sumar los cinco números. 
Asigna el resultado de una invocación (llamada) a la función con los números 2, 5, 1, 8, 10 
a una variable de nombre $tmp y muestra por pantalla el valor de la variable.

*/

function sumaArray( $valores ){
    $suma = 0;

    for ($i=0; $i < count($valores); $i++) { 
        $suma = $suma + $valores[$i];
    }

    return $suma;

}

$tmp = array (2, 5, 1, 8, 10);

$suma = sumaArray( array (2, 5, 1, 8, 10) );

echo $suma;

?>