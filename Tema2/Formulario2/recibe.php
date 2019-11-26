<?php

function generar_array($num_elementos, $min, $max){

    for ($i=0; $i < $num_elementos ; $i++) { 
        $valores[$i] = mt_rand($min, $max);
        echo $valores[$i] . " ";
    }
    echo "<br>";
    return $valores;
}

function mostrar_array ($valores){

    for ($i=0; $i < count($valores); $i++) { 
        echo $valores[$i] . " ";
    }
}

$valores = generar_array($_POST['num_elementos'], $_POST['min'], $_POST['max']);
mostrar_array($valores);

?>