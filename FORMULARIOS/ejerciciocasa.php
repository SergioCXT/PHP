<?php
/*Generar un array de 50 números aleatorios entre 5 y 10. Mostrar 
únicamente los números impares y obtener el número total de pares e impares.
Hacerlo mediante dos funciones, una será generarArray, y otra obtenerImpares,
que recibirá el array generado y devolverá el número de impares.
Utilizar biblioteca y las funciones pie y cabecera con tus datos.
*/
function generarArray($elementos, $pares, $impares){
    $suma=0;
    for($i=0;$i<count($elementos);$i++){
        $suma += $elementos[$i];
    }
    
    }
    echo "Elementos del array generados: ";
    for ($i=0; $i < 50; $i++) { 
        $elementos[$i] = mt_rand(5,15);
        echo $elementos[$i] . " ";
    }

?>