<?php
// Solo para arrays asociativos

$temp= array(10.5, 6.1, 7.0, 25.1, 11.3, 5.7, 15.4);

foreach ($temp as $valor) {
    echo "$valor ";
}

//Mostrar indices
foreach ($temp as $indice => $valor) {
    echo "La temperatura de $indice es $valor <br>";
}

var_dump($temp);

?>