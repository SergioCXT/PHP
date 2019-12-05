<?php

$importetotal=200;
$importe=$_POST['importe'];
$casilla=$_POST['casilla'];
$nombre=$_POST['nombre'];

juegoRuleta($nombre, 200, $casilla);

function juegoRuleta ($nombre, $importetotal, $casilla){
    $importe=$_POST['importe'];
    $casillagana= mt_rand(1, 8);
    echo "Bola en casilla " . $casillagana;
    echo "<br>";

    if ($casilla == $casillagana) {
        $importetotal = $importetotal + $importe; 
        echo "Gana";
    }else{
        $importetotal = $importetotal - $importe; 
        echo "Pierde";
    }

    return $importetotal;

}

echo "<br>";

echo "Importe total tras jugar: " . $importetotal;



?>