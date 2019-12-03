<?php

function generar_array ($num_elementos, $min, $max){

    echo "Valores del array: "; 
    for ($i=0; $i < $num_elementos ; $i++) { 
        $valores[$i] = mt_rand($min, $max);
        echo $valores[$i] . " ";
    }
    echo "<br>";
    return $valores;
}

function hallar_media ($valores){
    $suma=0;
    $media=0;
    for ($i=0; $i < count($valores); $i++) { 
        $suma += $valores[$i];
    }
    $media=round($suma / count($valores), 0);

    return $media;
}

function contar_mayores_a_media ($valores){

    echo "Valores mayor que la media: ";
    for ($i=0; $i < count($valores); $i++) {
        if ($valores[$i] > hallar_media($valores)) {
            echo $valores[$i] . " ";
            
        }
    }
}

?>