<?php

/*
Crea un bucle for que a partir de una variable de control $j que toma valores de 100 a 500 de 100 en 100, 
muestre por pantalla el resultado de dividir la variable de control por 20. 
En este caso, el resultado será 5 (que es 100/20…), 10 (que es 200/20…), 15, 20, 25.
*/

$num;

for ($j=100; $j <= 500; $j += 100) { 
    $num = $j/20;
    echo "$num ";
}

?>