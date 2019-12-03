<?php

$numtiradas=$_POST['numtiradas'];
$cj1=0;
$cj2=0;
$empate=0;

for ($i=0; $i < $numtiradas; $i++) { 
    $j1 = mt_rand(1, 6);
    $j2 = mt_rand(1, 6);

    if ($j1>$j2) {
        $cj1++;
    }elseif($j2>$j1) {
        $cj2++;
    } else {
        $empate++;
    }
}
echo "El jugador 1 ha ganado " . $cj1 . " veces.";
echo "<br>";
echo "El jugador 2 ha ganado " . $cj2 . " veces.";
echo "<br>";
echo "Ha habido empate " . $empate . " veces.";
echo "<br>";
echo "Ha habido " . $numtiradas . " tiradas.";
?>




