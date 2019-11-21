<?php
/*
Declara un array de enteros de nombre $coches e introduce en él 8 elementos 
cuyos valores sean 32, 11, 45, 22, 78, -3, 9, 66. 
A continuación muestra por pantalla el elemento con índice 5. 
Deberás obtener por pantalla que se visualiza -3.
*/

$coches= array(32, 11, 45, 22, 78, -3, 9, 66);


echo $coches[5];
echo "<br><br>";


foreach ($coches as $valor) {
    echo "$valor<br>";
}

?>