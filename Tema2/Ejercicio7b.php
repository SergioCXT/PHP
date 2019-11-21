<?php

/*
Crea un bucle do…while que a partir de una variable $contador que toma valores de 1 a 5, 
muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.*/
$contador = 1;
$num;

do {
    
    $num=$contador*2;
    echo "$num ";
    $contador++;
} while ($contador <= 5);


?>