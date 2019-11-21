<?php

/*
Crea una función hallar_media() que devuelva la media de los elementos de un array de siete elementos, 
los cuales se generarán aleatoriamente con el bucle for. 
Cada valor aleatorio del array estará comprendido entre 1 y 20, ambos inclusive. 
El array se pasará como único parámetro a la función. 
Orientación: En clase ya vimos cómo generar la media de una serie de valores de un array.

El resultado final será:
Media de los elementos del array: ...
*/

function hallar_media ($valores){
    $suma=0;
    for ($i=0; $i < count($valores); $i++) { 
        $suma += $valores[$i];
    }
    return round($suma / count($valores), 2);
}

function generar_array ($num_elementos, $min, $max){

    for ($i=0; $i < $num_elementos ; $i++) { 
        $valores[$i] = mt_rand($min, $max);
        echo $valores[$i] . " ";
    }
    echo "<br>";
    return $valores;
}

$array1 = generar_array(7, 1, 20);

echo "Media de los elementos del primer array: " . hallar_media($array1) . "<br><br>";

$array2 = generar_array(10, 1, 200);

echo "Media de los elementos del segundo array: " . hallar_media($array2) . "<br><br>";

?>