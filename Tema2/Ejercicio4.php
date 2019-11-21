<?php

/*
Define las variables $tipo, $grosor, $diametro y $marca. 
Establece que el tipo sea “Rueda de camión”, el grosor 0.33, el diámetro 1.25 y la marca “Kimashuki”. 
Crea el código PHP donde a través de condicionales if realices la siguiente comprobación: 
    si el diámetro es superior a 1.4 debe mostrarse por pantalla el mensaje “La rueda es para un vehículo grande”. 
Si es menor o igual a 1.4 debe mostrarse por pantalla el mensaje “La rueda es para un vehículo pequeño”. 
En otro caso, debe mostrarse “No existe un tamaño de rueda válido”.

Modifica los valores de diámetro y comprueba que los resultados obtenidos por pantalla sean correctos.
*/

$tipo = "Rueda de camión";
$grosor = 0.33;
$diametro = 1.25;
$marca = "Kimashuki";

if ($diametro > 1.4) {
    echo "La rueda es para un vehículo grande";
}elseif($diametro <= 1.4 && $diametro > 0){
    echo "La rueda es para un vehículo pequeño";
}else{
    echo "No existe un tamaño de rueda válido";
}

?>S