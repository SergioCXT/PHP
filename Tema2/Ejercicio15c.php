<?php

/*
Crea una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro 
y devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como 
Volumen = númeroPi * radio * radio * Altura, siendo número Pi = 3.1416 aproximadamente. 
NOTA: Investiga el uso de la función define() y utilízala para guardar el valor del número PI.
*/

function cilindro( $valores ){
    define("PI", 3.1416);

    $volumen = $valores[0] * $valores[0] * $valores[1] * PI;

    return $volumen;
}

$tmp = array (1, 2);

$volumen = cilindro( $tmp );

echo $volumen;

?>