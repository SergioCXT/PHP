<?php
/*
Generar un array de 50 números aleatorios entre 5 y 15. 
Mostrar únicamente los números impares y obtener el número total de pares e impares.
Hacerlo mediante dos funciones, una será GenerarArray que devolverá el array general y la otra
ObtenerImpares que recibirá el array generado y devolverá el número de impares.
Utilizar bibliotecas y las funciones pie y cabecera con tus datos.
*/

function generar_array ($num_elementos, $min, $max){

    for ($i=0; $i < $num_elementos ; $i++) { 
        $valores[$i] = mt_rand($min, $max);
        echo $valores[$i] . " ";
    }
    echo "<br>";
    return $valores;
}

$array1 = generar_array(7, 1, 20);
if ($valores < 5) {
    echo "hola";
}

?>