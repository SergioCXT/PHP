<?php

include "Biblioteca.php";

$numero=11;

echo "Valores generados: ";

for ($i=0; $i < 15 ; $i++) { 
    $array[$i] = mt_rand(1, 20);
    echo $array[$i] . " ";
}
echo "<br>";

echo "Media de los valores mayores al número introducido(" . $numero . "):" . mayoresYmedia($array, $numero);

?>