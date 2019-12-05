<?php

$importetotal=200;
$importe=$_POST['importe'];
$casilla=$_POST['casilla'];
$nombre=$_POST['nombre'];
$tiradas=$_POST['tiradas'];

juegoRuleta($nombre, 200, $casilla);

function juegoRuleta ($nombre, $importetotal, $casilla){
    $importe=$_POST['importe'];
    $tiradas=$_POST['tiradas'];
    echo "<br>";

    for ($i=0; $i < $tiradas ; $i++) { 
        $casillagana= mt_rand(1, 8);
        
        if ($casilla == $casillagana) {
            $importetotal = $importetotal + $importe; 
            echo "Bola en casilla " . $casillagana;
            echo "<br>";
            echo "Gana";
            echo "<br>";
            echo "<br>";
        }else{
            $importetotal = $importetotal - $importe; 
            echo "Bola en casilla " . $casillagana;
            echo "<br>";
            echo "Pierde";
            echo "<br>";
            echo "<br>";
        }
    }

    return $importetotal;

}

echo "<br>";

echo "Importe total tras jugar: " . $importetotal;



?>