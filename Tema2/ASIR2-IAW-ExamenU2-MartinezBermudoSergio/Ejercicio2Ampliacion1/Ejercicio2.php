<?php

$importetotal=200;
$casilla=$_POST['casilla'];
$importe=$_POST['importe'];
$tiradas=$_POST['tiradas'];

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


echo "<br>";

echo "Importe total tras jugar: " . $importetotal;



?>