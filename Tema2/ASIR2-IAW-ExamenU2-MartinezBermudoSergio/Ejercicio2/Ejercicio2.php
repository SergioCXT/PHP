<?php

$importetotal=200;
$casilla=$_POST['casilla'];
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

echo "<br>";

echo "Importe total tras jugar: " . $importetotal;



?>